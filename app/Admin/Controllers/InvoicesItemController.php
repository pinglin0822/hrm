<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\InvoicesItem;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class InvoicesItemController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new InvoicesItem(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('invoice_id');
            $grid->column('project_id');
            $grid->column('item_name');
            $grid->column('item_qty');
            $grid->column('item_unit_price');
            $grid->column('item_sub_total');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new InvoicesItem(), function (Show $show) {
            $show->field('id');
            $show->field('invoice_id');
            $show->field('project_id');
            $show->field('item_name');
            $show->field('item_qty');
            $show->field('item_unit_price');
            $show->field('item_sub_total');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new InvoicesItem(), function (Form $form) {
            $form->display('id');
            $form->text('invoice_id');
            $form->text('project_id');
            $form->text('item_name');
            $form->number('item_qty');
            $form->number('item_unit_price');
            $form->number('item_sub_total');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
