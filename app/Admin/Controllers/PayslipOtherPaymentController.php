<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\PayslipOtherPayment;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class PayslipOtherPaymentController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new PayslipOtherPayment(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('payslip_id');
            $grid->column('staff_id');
            $grid->column('is_taxable')->display(function ($is_taxable) {
                return $is_taxable ? 'true' : 'false';
            });
            $grid->column('is_fixed')->display(function ($is_fixed) {
                return $is_fixed ? 'true' : 'false';
            });
            $grid->column('pay_title');
            $grid->column('pay_amount');
            $grid->column('salary_month');
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
        return Show::make($id, new PayslipOtherPayment(), function (Show $show) {
            $show->field('id');
            $show->field('payslip_id');
            $show->field('staff_id');
            $show->field('is_taxable');
            $show->field('is_fixed');
            $show->field('pay_title');
            $show->field('pay_amount');
            $show->field('salary_month');
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
        return Form::make(new PayslipOtherPayment(), function (Form $form) {
            $form->display('id');
            $form->text('payslip_id');
            $form->text('staff_id');
            $form->switch('is_taxable');
            $form->switch('is_fixed');
            $form->text('pay_title');
            $form->number('pay_amount');
            $form->number('salary_month');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
