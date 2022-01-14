<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\LeaveApplication;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class LeaveApplicationController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new LeaveApplication(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('company_id');
            $grid->column('employee_id');
            $grid->column('leave_type_id');
            $grid->column('from_date');
            $grid->column('to_date');
            $grid->column('reason');
            $grid->column('remarks');
            $grid->column('status');
            $grid->column('is_half_day');
            $grid->column('leave_attachment');
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
        return Show::make($id, new LeaveApplication(), function (Show $show) {
            $show->field('id');
            $show->field('company_id');
            $show->field('employee_id');
            $show->field('leave_type_id');
            $show->field('from_date');
            $show->field('to_date');
            $show->field('reason');
            $show->field('remarks');
            $show->field('status');
            $show->field('is_half_day');
            $show->field('leave_attachment');
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
        return Form::make(new LeaveApplication(), function (Form $form) {
            $form->display('id');
            $form->text('company_id');
            $form->text('employee_id');
            $form->text('leave_type_id');
            $form->date('from_date');
            $form->date('to_date');
            $form->text('reason');
            $form->text('remarks');
            $form->text('status');
            $form->switch('is_half_day');
            $form->text('leave_attachment');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
