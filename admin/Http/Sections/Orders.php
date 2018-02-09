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
use SleepingOwl\Admin\Navigation\Badge;
use SleepingOwl\Admin\Section;

/**
 * Class Reviews
 *
 * @property \App\Model\Review $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Orders extends Section implements Initializable
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
    protected $title = 'Заявки';

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
                AdminColumn::text('email', 'Email')->setWidth('200px'),
                AdminColumn::text('phone', 'Телефон')->setWidth('200px'),
                AdminColumn::text('type', 'Тип')->setWidth('200px'),
                AdminColumnEditable::checkbox('is_new', 'Новая')->setLabel('Новая'),
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
            AdminFormElement::text('email', 'Email'),
            AdminFormElement::text('phone', 'Телефон'),
            AdminFormElement::text('type', 'Тип')->required(),
            AdminFormElement::textarea('text', 'Текст заявки'),
            AdminFormElement::radio('is_new', 'Статус')->setOptions(['0' => 'Просмотренна', '1' => 'Новая'])
                ->required(),
            AdminFormElement::datetime('created_at', 'Добавлен')->required(),
        ]);
    }


    /**
     * @return void
     */
    public function onDelete($id)
    {

    }

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation($priority = 20, function() {
            return \App\Model\Order::isNew()->count();
        });
    }

    public function getIcon()
    {
        return 'fa fa-volume-control-phone';
    }


    //заголовок для создания записи
    public function getCreateTitle()
    {
        return 'Создание отзыва';
    }
}
