<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminColumnEditable;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use App\Model\Gallery;
use App\Model\Service;
use Illuminate\Support\Facades\Storage;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Galleries
 *
 * @property \App\Model\Review $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Galleries extends Section implements Initializable
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
    protected $title = 'Портфолио';

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::datatablesAsync()  /*->table()->with('users')*/
        ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::text('title', 'Заголовок')->setWidth('200px'),
                AdminColumn::text('slug', 'Слаг'),
                AdminColumn::image('cover', 'Обложка'),
                AdminColumn::count('images', 'Фото'),
                AdminColumn::datetime('created_at', 'Добавлен')
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
            AdminFormElement::text('title', 'Заголовок')->required(),
            AdminFormElement::text('name', 'Название')->required(),
            AdminFormElement::text('heading', 'Заголовок H1')->required(),
            AdminFormElement::text('meta_title', 'Meta title')->required(),
            AdminFormElement::textarea('meta_description', 'Meta description')->required(),
            AdminFormElement::text('slug', 'Слаг')->required()->unique(),
            AdminFormElement::ckeditor('description', 'Описание')->required(),
            AdminFormElement::select('service_id', 'Вид предоставленной услуги', Service::class)
                ->setDisplay('name'),
            AdminFormElement::image('cover', 'Обложка'),
            AdminFormElement::images('images', 'Галлерея'),
            AdminFormElement::datetime('created_at', 'Добавлен')->required(),
        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
//        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        $gallery = Gallery::findOrFail($id);
        Storage::disk('public')->delete(str_replace('storage/', '', $gallery->cover));
        Storage::disk('public')->delete(str_replace('storage/', '', $gallery->images));

    }

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation($priority = 20);
    }

    public function getIcon()
    {
        return 'fa fa-camera';
    }


    //заголовок для создания записи
    public function getCreateTitle()
    {
        return 'Создание галлереи';
    }
}
