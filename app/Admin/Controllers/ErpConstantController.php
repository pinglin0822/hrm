<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\ErpConstant;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ErpConstantController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new ErpConstant(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('company_id');
            $grid->column('type')->display(function ($type){
                switch ($type){
                    default :return null;
                    case 0:return 'assets_category';
                    case 1:return 'assets_brand';
                    case 2:return 'award_type';
                    case 3:return 'competencies';
                    case 4:return 'competencies2';
                    case 5:return 'customers_group';
                    case 6:return 'exit_type';
                    case 7:return 'expense_type';
                    case 8:return 'goal_type';
                    case 9:return 'income_type';
                    case 10:return 'jobs_categories';
                    case 11:return 'leave_type';
                    case 12:return 'tax_type';
                    case 13:return 'training_type';
                    case 14:return 'travel_type';
                    case 15:return 'warning_type';
                }
            });
            $grid->column('category_name');
            $grid->column('field_one');
            $grid->column('field_two');
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
        return Show::make($id, new ErpConstant(), function (Show $show) {
            $show->field('id');
            $show->field('company_id');
            $show->field('type');
            $show->field('category_name');
            $show->field('field_one');
            $show->field('field_two');
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
        return Form::make(new ErpConstant(), function (Form $form) {
            $form->display('id');
            $form->text('company_id');

            $type = [
                'assets_category',
                'assets_brand',
                'award_type',
                'competencies',
                'competencies2',
                'customers_group',
                'exit_type',
                'expense_type',
                'goal_type',
                'income_type',
                'jobs_categories',
                'leave_type',
                'tax_type',
                'training_type',
                'travel_type',
                'warning_type',
            ];
            $form->select('type')->options($type);
            $form->text('category_name');
            $form->text('field_one');
            $form->text('field_two');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
