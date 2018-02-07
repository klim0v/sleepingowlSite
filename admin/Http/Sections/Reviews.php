<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use App\Model\Review;
use Illuminate\Support\Facades\Storage;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Reviews
 *
 * @property \App\Model\Review $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Reviews extends Section implements Initializable
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
    protected $title = 'Отзывы';

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
                AdminColumn::text('author', 'Название')->setWidth('200px'),
                AdminColumn::text('description', 'Текст отзыва'),
                AdminColumn::image('logo', 'Логотип'),
                AdminColumn::image('background', 'Фоновое изображение'),
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
            AdminFormElement::text('author', 'Автор')->required(),
            AdminFormElement::ckeditor('description', 'Текст отзыва')->required(),
            AdminFormElement::image('logo', 'Логотип компании'),
            AdminFormElement::image('background', 'Фоновое изображение'),
            AdminFormElement::datetime('created_at', 'Добавлен'),
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
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }


    /**
     * @return void
     */
    public function onDestroy($id)
    {
        $review = Review::onlyTrashed()->findOrFail($id);
        Storage::disk('public')->delete(str_replace('storage/', '', $review->image));
        Storage::disk('public')->delete(str_replace('storage/', '', $review->background));
    }

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation($priority = 10);
    }

    public function getIcon()
    {
        return 'fa fa-comments-o';
    }


    //заголовок для создания записи
    public function getCreateTitle()
    {
        return 'Создание отзыва';
    }
}
