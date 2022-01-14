<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Invoice;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class InvoiceController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Invoice(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('invoice_number');
            $grid->column('company_id');
            $grid->column('client_id');
            $grid->column('project_id');
            $grid->column('invoice_month');
            $grid->column('invoice_date');
            $grid->column('invoice_due_date');
            $grid->column('sub_total_amount');
            $grid->column('discount_type');
            $grid->column('discount_figure');
            $grid->column('total_tax');
            $grid->column('tax_type');
            $grid->column('total_discount');
            $grid->column('grand_total');
            $grid->column('invoice_note');
            $grid->column('status');
            $grid->column('payment_method');
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
        return Show::make($id, new Invoice(), function (Show $show) {
            $show->field('id');
            $show->field('invoice_number');
            $show->field('company_id');
            $show->field('client_id');
            $show->field('project_id');
            $show->field('invoice_month');
            $show->field('invoice_date');
            $show->field('invoice_due_date');
            $show->field('sub_total_amount');
            $show->field('discount_type');
            $show->field('discount_figure');
            $show->field('total_tax');
            $show->field('tax_type');
            $show->field('total_discount');
            $show->field('grand_total');
            $show->field('invoice_note');
            $show->field('status');
            $show->field('payment_method');
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
        return Form::make(new Invoice(), function (Form $form) {
            $form->display('id');
            $form->number('invoice_number');
            $form->text('company_id');
            $form->text('client_id');
            $form->text('project_id');
            $form->text('invoice_month');
            $form->date('invoice_date');
            $form->date('invoice_due_date');
            $form->number('sub_total_amount');
            $form->text('discount_type');
            $form->text('discount_figure');
            $form->number('total_tax');
            $form->text('tax_type');
            $form->number('total_discount');
            $form->number('grand_total');
            $form->text('invoice_note');
            $form->text('status');
            $form->text('payment_method');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
