<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminColumnEditable;
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
                AdminColumn::text('author', 'Автор')->setWidth('200px'),
                AdminColumn::text('text', 'Текст отзыва'),
                AdminColumn::image('logo', 'Логотип'),
                AdminColumn::image('background', 'Фоновое изображение'),
                AdminColumnEditable::checkbox('published', 'Опубликован', 'Не опубликован')
                    ->setLabel('Опубликован'),
                AdminColumnEditable::checkbox('is_new', 'Новый', 'Просмотрен')
                    ->setLabel('Статус'),
                AdminColumnEditable::checkbox('on_main', 'Да', 'Нет')
                    ->setLabel('На главную'),
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
            AdminFormElement::ckeditor('text', 'Текст отзыва')->required(),
            AdminFormElement::image('logo', 'Логотип компании'),
            AdminFormElement::image('background', 'Фоновое изображение'),
            AdminFormElement::radio('published', 'Опубликовано')
                ->setOptions(['0' => 'Не опубликовано', '1' => 'Опубликовано'])
                ->required(),
            AdminFormElement::radio('is_new', 'Статус')
                ->setOptions(['0' => 'Просмотрен', '1' => 'Новый'])
                ->required(),
            AdminFormElement::radio('on_main', 'Показывать на главной странице')
                ->setOptions(['0' => 'Не показывать', '1' => 'Показывать'])
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
        $review = Review::findOrFail($id);
        Storage::disk('public')->delete(str_replace('storage/', '', $review->image));
        Storage::disk('public')->delete(str_replace('storage/', '', $review->background));

    }

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation($priority = 10, function() {
            return Review::isNew()->count();
        });
    }

    public function getIcon()
    {
        return 'fa fa-commenting';
    }


    //заголовок для создания записи
    public function getCreateTitle()
    {
        return 'Создание отзыва';
    }
}
