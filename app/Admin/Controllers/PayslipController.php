<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Payslip;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class PayslipController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Payslip(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('payslip_key');
            $grid->column('company_id');
            $grid->column('staff_id');
            $grid->column('salary_month');
            $grid->column('wages_type');
            $grid->column('payslip_type');
            $grid->column('basic_salary');
            $grid->column('daily_wages');
            $grid->column('hours_worked');
            $grid->column('total_allowances');
            $grid->column('total_commissions');
            $grid->column('total_statutory_deductions');
            $grid->column('total_other_payments');
            $grid->column('net_salary');
            $grid->column('payment_method');
            $grid->column('pay_comments');
            $grid->column('is_payment');
            $grid->column('year_to_date');
            $grid->column('is_advance_salary_deduct');
            $grid->column('advance_salary_amount');
            $grid->column('is_loan_deduct');
            $grid->column('loan_amount');
            $grid->column('status');
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
        return Show::make($id, new Payslip(), function (Show $show) {
            $show->field('id');
            $show->field('payslip_key');
            $show->field('company_id');
            $show->field('staff_id');
            $show->field('salary_month');
            $show->field('wages_type');
            $show->field('payslip_type');
            $show->field('basic_salary');
            $show->field('daily_wages');
            $show->field('hours_worked');
            $show->field('total_allowances');
            $show->field('total_commissions');
            $show->field('total_statutory_deductions');
            $show->field('total_other_payments');
            $show->field('net_salary');
            $show->field('payment_method');
            $show->field('pay_comments');
            $show->field('is_payment');
            $show->field('year_to_date');
            $show->field('is_advance_salary_deduct');
            $show->field('advance_salary_amount');
            $show->field('is_loan_deduct');
            $show->field('loan_amount');
            $show->field('status');
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
        return Form::make(new Payslip(), function (Form $form) {
            $form->display('id');
            $form->text('payslip_key');
            $form->text('company_id');
            $form->text('staff_id');
            $form->number('salary_month');
            $form->text('wages_type');
            $form->text('payslip_type');
            $form->number('basic_salary');
            $form->number('daily_wages');
            $form->text('hours_worked');
            $form->number('total_allowances');
            $form->number('total_commissions');
            $form->number('total_statutory_deductions');
            $form->number('total_other_payments');
            $form->number('net_salary');
            $form->text('payment_method');
            $form->text('pay_comments');
            $form->switch('is_payment');
            $form->text('year_to_date');
            $form->switch('is_advance_salary_deduct');
            $form->number('advance_salary_amount');
            $form->switch('is_loan_deduct');
            $form->number('loan_amount');
            $form->text('status');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
