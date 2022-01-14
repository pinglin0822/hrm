<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Policy;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class PolicyController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Policy(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('company_id');
            $grid->column('title');
            $grid->column('description');
            $grid->column('attachment');
            $grid->column('added_by');
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
        return Show::make($id, new Policy(), function (Show $show) {
            $show->field('id');
            $show->field('company_id');
            $show->field('title');
            $show->field('description');
            $show->field('attachment');
            $show->field('added_by');
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
        return Form::make(new Policy(), function (Form $form) {
            $form->display('id');
            $form->text('company_id');
            $form->text('title');
            $form->text('description');
            $form->text('attachment');
            $form->text('added_by');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
