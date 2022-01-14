<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\PayslipStatutoryDeduction;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class PayslipStatutoryDeductionController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new PayslipStatutoryDeduction(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('payslip_id');
            $grid->column('staff_id');
            $grid->column('is_fixed');
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
        return Show::make($id, new PayslipStatutoryDeduction(), function (Show $show) {
            $show->field('id');
            $show->field('payslip_id');
            $show->field('staff_id');
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
        return Form::make(new PayslipStatutoryDeduction(), function (Form $form) {
            $form->display('id');
            $form->text('payslip_id');
            $form->text('staff_id');
            $form->switch('is_fixed');
            $form->text('pay_title');
            $form->number('pay_amount');
            $form->number('salary_month');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
