<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\EmailTemplate;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class EmailTemplateController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new EmailTemplate(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('template_code');
            $grid->column('template_type');
            $grid->column('name');
            $grid->column('subject');
            $grid->column('message');
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
        return Show::make($id, new EmailTemplate(), function (Show $show) {
            $show->field('id');
            $show->field('template_code');
            $show->field('template_type');
            $show->field('name');
            $show->field('subject');
            $show->field('message');
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
        return Form::make(new EmailTemplate(), function (Form $form) {
            $form->display('id');
            $form->text('template_code');
            $form->text('template_type');
            $form->text('name');
            $form->text('subject');
            $form->text('message');
            $form->text('status');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
