<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Language;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class LanguageController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Language(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('language_name');
            $grid->column('language_code');
            $grid->column('language_flag');
            $grid->column('is_active');
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
        return Show::make($id, new Language(), function (Show $show) {
            $show->field('id');
            $show->field('language_name');
            $show->field('language_code');
            $show->field('language_flag');
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
        return Form::make(new Language(), function (Form $form) {
            $form->display('id');
            $form->text('language_name');
            $form->text('language_code');
            $form->text('language_flag');
            $form->switch('is_active');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
