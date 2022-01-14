<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\TimesheetRequest;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class TimesheetRequestController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new TimesheetRequest(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('company_id');
            $grid->column('staff_id');
            $grid->column('request_date');
            $grid->column('request_month');
            $grid->column('clock_in');
            $grid->column('clock_out');
            $grid->column('total_hours');
            $grid->column('request_reason');
            $grid->column('is_approved');
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
        return Show::make($id, new TimesheetRequest(), function (Show $show) {
            $show->field('id');
            $show->field('company_id');
            $show->field('staff_id');
            $show->field('request_date');
            $show->field('request_month');
            $show->field('clock_in');
            $show->field('clock_out');
            $show->field('total_hours');
            $show->field('request_reason');
            $show->field('is_approved');
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
        return Form::make(new TimesheetRequest(), function (Form $form) {
            $form->display('id');
            $form->text('company_id');
            $form->text('staff_id');
            $form->date('request_date');
            $form->text('request_month');
            $form->time('clock_in');
            $form->time('clock_out');
            $form->text('total_hours');
            $form->text('request_reason');
            $form->switch('is_approved');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
