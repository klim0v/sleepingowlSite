<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminColumnEditable;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use App\Model\Banner;
use Illuminate\Support\Facades\Storage;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class FundamentalSettings
 *
 * @property \App\Model\FundamentalSetting $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Banners extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Баннеры';

    /**
     * @var string
     */
    protected $alias = 'banners';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        // Добавление пункта меню и счетчика кол-ва записей в разделе
        $this->addToNavigation($priority = 1);

//        $this->creating(function($config, \Illuminate\Database\Eloquent\Model $model) {
//            //...
//        });

    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::datatablesAsync()/*->with('users')*/
        ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::text('title', 'Название')->setWidth('200px'),
                AdminColumn::url('link', 'Ссылка')->setWidth('200px'),
                AdminColumn::text('color', 'Цвет фона надписи'),
                AdminColumn::image('image', 'Изображение'),
                AdminColumnEditable::checkbox('published', 'Опубликован', 'Не публикован')
                    ->setLabel('Опубликован')
            )->paginate(15);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('title', 'Название')->required(),
            AdminFormElement::text('link', 'Ссылка на страницу')->required(),
            AdminFormElement::select('color', 'Цвет фона надписи', [
                'green' => 'Зеленый',
                'red' => 'Красный',
                'orange' => 'Оранжевый',
                'light-blue' => 'Голубой'
            ])->required(),
            AdminFormElement::image('image', 'Изображение')->required(),
            AdminFormElement::radio('published', 'Опубликовано')->setOptions(['0' => 'Не опубликовано', '1' => 'Опубликовано'])
                ->required(),
        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        $banner = Banner::findOrFail($id);
        if (null !== $banner->image) {
            Storage::disk('public')->delete(str_replace('storage/', '', $banner->image));
        }
    }

    //заголовок для создания записи
    public function getCreateTitle()
    {
        return 'Создание баннера';
    }

    // иконка для пункта меню
    public function getIcon()
    {
        return 'fa fa-image';
    }
}
