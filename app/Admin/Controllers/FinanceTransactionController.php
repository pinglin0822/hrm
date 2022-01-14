<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\FinanceTransaction;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class FinanceTransactionController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new FinanceTransaction(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('account_id');
            $grid->column('company_id');
            $grid->column('staff_id');
            $grid->column('transaction_date');
            $grid->column('transaction_type');
            $grid->column('entity_id');
            $grid->column('entity_type');
            $grid->column('entity_category_id');
            $grid->column('description');
            $grid->column('amount');
            $grid->column('dr_cr');
            $grid->column('payment_method_id');
            $grid->column('reference');
            $grid->column('attachment_file');
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
        return Show::make($id, new FinanceTransaction(), function (Show $show) {
            $show->field('id');
            $show->field('account_id');
            $show->field('company_id');
            $show->field('staff_id');
            $show->field('transaction_date');
            $show->field('transaction_type');
            $show->field('entity_id');
            $show->field('entity_type');
            $show->field('entity_category_id');
            $show->field('description');
            $show->field('amount');
            $show->field('dr_cr');
            $show->field('payment_method_id');
            $show->field('reference');
            $show->field('attachment_file');
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
        return Form::make(new FinanceTransaction(), function (Form $form) {
            $form->display('id');
            $form->text('account_id');
            $form->text('company_id');
            $form->text('staff_id');
            $form->date('transaction_date');
            $form->text('transaction_type');
            $form->text('entity_id');
            $form->text('entity_type');
            $form->text('entity_category_id');
            $form->text('description');
            $form->number('amount');
            $form->text('dr_cr');
            $form->text('payment_method_id');
            $form->text('reference');
            $form->text('attachment_file');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
