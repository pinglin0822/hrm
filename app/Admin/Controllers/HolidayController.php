<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Holiday;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class HolidayController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Holiday(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('company_id');
            $grid->column('event_name');
            $grid->column('description');
            $grid->column('start_date');
            $grid->column('end_date');
            $grid->column('is_published');
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
        return Show::make($id, new Holiday(), function (Show $show) {
            $show->field('id');
            $show->field('company_id');
            $show->field('event_name');
            $show->field('description');
            $show->field('start_date');
            $show->field('end_date');
            $show->field('is_published');
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
        return Form::make(new Holiday(), function (Form $form) {
            $form->display('id');
            $form->text('company_id');
            $form->text('event_name');
            $form->text('description');
            $form->date('start_date');
            $form->date('end_date');
            $form->switch('is_published');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
