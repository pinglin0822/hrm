<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\ContractOption;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ContractOptionController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new ContractOption(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('user_id');
            $grid->column('salary_type')->display(function ($salary_type){
                switch($salary_type){
                    case 0:return 'allowances';
                    case 1:return 'commissions';
                    case 2:return 'statutory';
                    case 3:return 'other_payments';
                    default:return null;
                }
            });
            $grid->column('contract_tax_option');
            $grid->column('is_fixed')->display(function ($is_fixed) {
                return $is_fixed ? 'true' : 'false';
            });
            $grid->column('option_title');
            $grid->column('contract_amount');
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
        return Show::make($id, new ContractOption(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('salary_type');
            $show->field('contract_tax_option');
            $show->field('is_fixed');
            $show->field('option_title');
            $show->field('contract_amount');
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
        return Form::make(new ContractOption(), function (Form $form) {
            $form->display('id');
            $form->text('user_id');

            $salaryType = ['allowances','commissions','statutory','other_payments'];
            $form->select('salary_type')->options($salaryType);
            $form->text('contract_tax_option');
            $form->switch('is_fixed');
            $form->text('option_title');
            $form->number('contract_amount');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
