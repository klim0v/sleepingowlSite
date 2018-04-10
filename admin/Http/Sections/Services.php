<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminColumnEditable;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use App\Model\Gallery;
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
class Services extends Section implements Initializable
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
    protected $title = 'Услуги';

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::tree()->setMaxDepth(2)->setValue('title');
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
            AdminFormElement::text('heading', 'Заголовок H1')->required(),
            AdminFormElement::text('meta_title', 'Meta title')->required(),
            AdminFormElement::text('meta_description', 'Meta description')->required(),
            AdminFormElement::text('slug', 'Слаг')->required()->unique(),
            AdminFormElement::ckeditor('annotation', 'Аннотация')->required(),
            AdminFormElement::ckeditor('description', 'Описание')->required(),
            AdminFormElement::image('icon', 'Иконка'),
            AdminFormElement::image('cover', 'Обложка'),
            AdminFormElement::radio('published', 'Опубликовано')
                ->setOptions(['0' => 'Не опубликовано', '1' => 'Опубликовано'])
                ->required(),
            AdminFormElement::datetime('created_at', 'Добавлен')->required(),
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
        $gallery = Gallery::find($id);
        Storage::disk('public')->delete(str_replace('storage/', '', $gallery->cover));
        Storage::disk('public')->delete(str_replace('storage/', '', $gallery->icon));

    }

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation($priority = 30);
    }

    public function getIcon()
    {
        return 'fa fa-money';
    }


    //заголовок для создания записи
    public function getCreateTitle()
    {
        return 'Создание услуги';
    }
}
