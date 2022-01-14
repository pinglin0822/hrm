<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\StaffRole;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class StaffRoleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new StaffRole(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('company_id');
            $grid->column('role_name');
            $grid->column('role_access');
            $grid->column('role_resources');
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
        return Show::make($id, new StaffRole(), function (Show $show) {
            $show->field('id');
            $show->field('company_id');
            $show->field('role_name');
            $show->field('role_access');
            $show->field('role_resources');
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
        return Form::make(new StaffRole(), function (Form $form) {
            $form->display('id');
            $form->text('company_id');
            $form->text('role_name');
            $form->text('role_access');
            $form->text('role_resources');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
