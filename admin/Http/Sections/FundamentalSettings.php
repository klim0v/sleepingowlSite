<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Banners
 *
 * @property \App\Model\Banner $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class FundamentalSettings extends Section implements Initializable
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
    protected $title = 'Базовые настройки';

    /**
     * @var string
     */
    protected $alias = 'settings';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        // Добавление пункта меню и счетчика кол-ва записей в разделе
        $this->addToNavigation($priority = 5000, function() {
            return \App\Model\FundamentalSetting::count();
        });

        $this->creating(function($config, \Illuminate\Database\Eloquent\Model $model) {
            //...
        });
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()/*->with('users')*/
        ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::link('title', 'Настройка')->setWidth('200px'),
                AdminColumn::text('value', 'Значение'),
                AdminColumn::text('description', 'Описание')
            )->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        // поле key - нельзя редактировать, ибо нефиг системообразующий код редактировать
        return AdminForm::panel()->addBody([
            AdminFormElement::text('title', 'Название настройки')->required(),
            AdminFormElement::text('value', 'Значение')->required(),
            AdminFormElement::textarea('description', 'Описание'),
            AdminFormElement::text('id', 'ID')->setReadonly(1),
            AdminFormElement::text('key', 'Ключ')->setReadonly(1),
            AdminFormElement::text('created_at')->setLabel('Создано')->setReadonly(1),

        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        //return $this->onEdit(null);
        // а вот создать var можно. Один раз и навсегда
        return AdminForm::panel()->addBody([
            AdminFormElement::text('title', 'Название настройки')->required(),
            AdminFormElement::text('key', 'Постоянный системный код')->required(),
            AdminFormElement::text('value', 'Значение')->required(),
            AdminFormElement::textarea('description', 'Описание'),

        ]);
    }

//    /**
//     * @return void
//     */
//    public function onDelete($id)
//    {
//        // remove if unused
//    }
//
//    /**
//     * @return void
//     */
//    public function onRestore($id)
//    {
//        // remove if unused
//    }

    //заголовок для создания записи
    public function getCreateTitle()
    {
        return 'Создание базовой настройки';
    }

    // иконка для пункта меню - шестеренка
    public function getIcon()
    {
        return 'fa fa-gear';
    }
}
