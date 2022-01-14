<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Department;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class DepartmentController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Department(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('department_name');
            $grid->column('company_id');
            $grid->column('department_head');
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
        return Show::make($id, new Department(), function (Show $show) {
            $show->field('id');
            $show->field('department_name');
            $show->field('company_id');
            $show->field('department_head');
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
        return Form::make(new Department(), function (Form $form) {
            $form->display('id');
            $form->text('department_name');
            $form->text('company_id');
            $form->text('department_head');
            $form->text('added_by');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
