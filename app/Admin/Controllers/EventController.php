<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Event;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class EventController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Event(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('company_id');
            $grid->column('employee_id');
            $grid->column('event_title');
            $grid->column('event_date');
            $grid->column('event_time');
            $grid->column('event_note');
            $grid->column('event_color');
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
        return Show::make($id, new Event(), function (Show $show) {
            $show->field('id');
            $show->field('company_id');
            $show->field('employee_id');
            $show->field('event_title');
            $show->field('event_date');
            $show->field('event_time');
            $show->field('event_note');
            $show->field('event_color');
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
        return Form::make(new Event(), function (Form $form) {
            $form->display('id');
            $form->text('company_id');
            $form->text('employee_id');
            $form->text('event_title');
            $form->date('event_date');
            $form->time('event_time');
            $form->text('event_note');
            $form->color('event_color');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
