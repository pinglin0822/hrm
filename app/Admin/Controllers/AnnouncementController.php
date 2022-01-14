<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Announcement;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class AnnouncementController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Announcement(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('company_id');
            $grid->column('department_id');
            $grid->column('title');
            $grid->column('start_date');
            $grid->column('end_date');
            $grid->column('published_by');
            $grid->column('summary');
            $grid->column('description');
            $grid->column('is_active')->display(function ($is_active) {
                return $is_active ? 'true' : 'false';
            });
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
        return Show::make($id, new Announcement(), function (Show $show) {
            $show->field('id');
            $show->field('company_id');
            $show->field('department_id');
            $show->field('title');
            $show->field('start_date');
            $show->field('end_date');
            $show->field('published_by');
            $show->field('summary');
            $show->field('description');
            $show->field('is_active');
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
        return Form::make(new Announcement(), function (Form $form) {
            $form->display('id');
            $form->text('company_id');
            $form->text('department_id');
            $form->text('title');
            $form->date('start_date');
            $form->date('end_date');
            $form->text('published_by');
            $form->text('summary');
            $form->text('description');
            $form->switch('is_active');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
