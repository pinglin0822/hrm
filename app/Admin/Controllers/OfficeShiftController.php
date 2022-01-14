<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\OfficeShift;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class OfficeShiftController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new OfficeShift(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('company_id');
            $grid->column('shift_name');
            $grid->column('monday_in_time');
            $grid->column('monday_out_time');
            $grid->column('tuesday_in_time');
            $grid->column('tuesday_out_time');
            $grid->column('wednesday_in_time');
            $grid->column('wednesday_out_time');
            $grid->column('thursday_in_time');
            $grid->column('thursday_out_time');
            $grid->column('friday_in_time');
            $grid->column('friday_out_time');
            $grid->column('saturday_in_time');
            $grid->column('saturday_out_time');
            $grid->column('sunday_in_time');
            $grid->column('sunday_out_time');
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
        return Show::make($id, new OfficeShift(), function (Show $show) {
            $show->field('id');
            $show->field('company_id');
            $show->field('shift_name');
            $show->field('monday_in_time');
            $show->field('monday_out_time');
            $show->field('tuesday_in_time');
            $show->field('tuesday_out_time');
            $show->field('wednesday_in_time');
            $show->field('wednesday_out_time');
            $show->field('thursday_in_time');
            $show->field('thursday_out_time');
            $show->field('friday_in_time');
            $show->field('friday_out_time');
            $show->field('saturday_in_time');
            $show->field('saturday_out_time');
            $show->field('sunday_in_time');
            $show->field('sunday_out_time');
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
        return Form::make(new OfficeShift(), function (Form $form) {
            $form->display('id');
            $form->text('company_id');
            $form->text('shift_name');
            $form->time('monday_in_time');
            $form->time('monday_out_time');
            $form->time('tuesday_in_time');
            $form->time('tuesday_out_time');
            $form->time('wednesday_in_time');
            $form->time('wednesday_out_time');
            $form->time('thursday_in_time');
            $form->time('thursday_out_time');
            $form->time('friday_in_time');
            $form->time('friday_out_time');
            $form->time('saturday_in_time');
            $form->time('saturday_out_time');
            $form->time('sunday_in_time');
            $form->time('sunday_out_time');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
