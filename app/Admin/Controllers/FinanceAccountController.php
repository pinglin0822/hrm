<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\FinanceAccount;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class FinanceAccountController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new FinanceAccount(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('company_id');
            $grid->column('account_name');
            $grid->column('account_balance');
            $grid->column('account_opening_balance');
            $grid->column('account_number');
            $grid->column('branch_code');
            $grid->column('bank_branch');
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
        return Show::make($id, new FinanceAccount(), function (Show $show) {
            $show->field('id');
            $show->field('company_id');
            $show->field('account_name');
            $show->field('account_balance');
            $show->field('account_opening_balance');
            $show->field('account_number');
            $show->field('branch_code');
            $show->field('bank_branch');
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
        return Form::make(new FinanceAccount(), function (Form $form) {
            $form->display('id');
            $form->text('company_id');
            $form->text('account_name');
            $form->number('account_balance');
            $form->number('account_opening_balance');
            $form->number('account_number');
            $form->text('branch_code');
            $form->text('bank_branch');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
