<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Designation;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class DesignationController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Designation(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('department_id');
            $grid->column('company_id');
            $grid->column('designation_name');
            $grid->column('description');
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
        return Show::make($id, new Designation(), function (Show $show) {
            $show->field('id');
            $show->field('department_id');
            $show->field('company_id');
            $show->field('designation_name');
            $show->field('description');
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
        return Form::make(new Designation(), function (Form $form) {
            $form->display('id');
            $form->text('department_id');
            $form->text('company_id');
            $form->text('designation_name');
            $form->text('description');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
