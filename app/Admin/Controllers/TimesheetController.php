<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Timesheet;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class TimesheetController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Timesheet(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('company_id');
            $grid->column('employee_id');
            $grid->column('attendance_date');
            $grid->column('clock_in');
            $grid->column('clock_in_ip_address');
            $grid->column('clock_out');
            $grid->column('clock_out_ip_address');
            $grid->column('clock_in_out');
            $grid->column('clock_in_latitude');
            $grid->column('clock_in_longitude');
            $grid->column('clock_out_latitude');
            $grid->column('clock_out_longitude');
            $grid->column('time_late');
            $grid->column('early_leaving');
            $grid->column('overtime');
            $grid->column('total_work');
            $grid->column('total_rest');
            $grid->column('attendance_status');
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
        return Show::make($id, new Timesheet(), function (Show $show) {
            $show->field('id');
            $show->field('company_id');
            $show->field('employee_id');
            $show->field('attendance_date');
            $show->field('clock_in');
            $show->field('clock_in_ip_address');
            $show->field('clock_out');
            $show->field('clock_out_ip_address');
            $show->field('clock_in_out');
            $show->field('clock_in_latitude');
            $show->field('clock_in_longitude');
            $show->field('clock_out_latitude');
            $show->field('clock_out_longitude');
            $show->field('time_late');
            $show->field('early_leaving');
            $show->field('overtime');
            $show->field('total_work');
            $show->field('total_rest');
            $show->field('attendance_status');
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
        return Form::make(new Timesheet(), function (Form $form) {
            $form->display('id');
            $form->text('company_id');
            $form->text('employee_id');
            $form->date('attendance_date');
            $form->time('clock_in');
            $form->ip('clock_in_ip_address');
            $form->time('clock_out');
            $form->ip('clock_out_ip_address');
            $form->text('clock_in_out');
            $form->number('clock_in_latitude');
            $form->number('clock_in_longitude');
            $form->number('clock_out_latitude');
            $form->number('clock_out_longitude');
            $form->text('time_late');
            $form->text('early_leaving');
            $form->text('overtime');
            $form->text('total_work');
            $form->text('total_rest');
            $form->text('attendance_status');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
