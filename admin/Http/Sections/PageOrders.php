<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Display\Column\Order;
use SleepingOwl\Admin\Display\Tree\OrderTreeType;
use SleepingOwl\Admin\Navigation\Badge;
use SleepingOwl\Admin\Section;

/**
 * Class Pages
 *
 * @property \App\Model\Page $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class PageOrders extends Section implements Initializable
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
    protected $title = 'Страницы';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-sitemap');
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::tree(OrderTreeType::class)->setValue('name');
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::form()->setElements([
            AdminFormElement::text('key', 'Ключ')->required()->setReadonly(1),
            AdminFormElement::text('title', 'Заголовок')->required(),
            AdminFormElement::text('name', 'Название')->required(),
            AdminFormElement::text('heading', 'Заголовок H1')->required(),
            AdminFormElement::text('meta_title', 'Meta Title'),
            AdminFormElement::textarea('meta_description', 'Meta Description'),
            AdminFormElement::ckeditor('description', 'Text'),
        ]);
    }

}
