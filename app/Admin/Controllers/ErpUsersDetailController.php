<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\ErpUsersDetail;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ErpUsersDetailController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new ErpUsersDetail(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('user_id');
            $grid->column('employee_id');
            $grid->column('department_id');
            $grid->column('designation_id');
            $grid->column('office_shift_id');
            $grid->column('basic_salary');
            $grid->column('hourly_rate');
            $grid->column('salary_type')->display(function ($salary_type){
                switch($salary_type){
                    case 0:return 'allowances';
                    case 1:return 'commissions';
                    case 2:return 'statutory';
                    case 3:return 'other_payments';
                    default:return null;
                }
            });
            $grid->column('role_description');
            $grid->column('date_of_joining');
            $grid->column('date_of_leaving');
            $grid->column('date_of_birth');
            $grid->column('marital_status');
            $grid->column('religion_id');
            $grid->column('blood_group');
            $grid->column('citizenship_id');
            $grid->column('bio');
            $grid->column('experience');
            $grid->column('fb_profile');
            $grid->column('twitter_profile');
            $grid->column('gplus_profile');
            $grid->column('linkedin_profile');
            $grid->column('account_title');
            $grid->column('account_number');
            $grid->column('bank_name');
            $grid->column('iban');
            $grid->column('swift_code');
            $grid->column('bank_branch');
            $grid->column('contact_full_name');
            $grid->column('contact_phone_no');
            $grid->column('contact_email');
            $grid->column('contact_address');
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
        return Show::make($id, new ErpUsersDetail(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('employee_id');
            $show->field('department_id');
            $show->field('designation_id');
            $show->field('office_shift_id');
            $show->field('basic_salary');
            $show->field('hourly_rate');
            $show->field('salary_type');
            $show->field('role_description');
            $show->field('date_of_joining');
            $show->field('date_of_leaving');
            $show->field('date_of_birth');
            $show->field('marital_status');
            $show->field('religion_id');
            $show->field('blood_group');
            $show->field('citizenship_id');
            $show->field('bio');
            $show->field('experience');
            $show->field('fb_profile');
            $show->field('twitter_profile');
            $show->field('gplus_profile');
            $show->field('linkedin_profile');
            $show->field('account_title');
            $show->field('account_number');
            $show->field('bank_name');
            $show->field('iban');
            $show->field('swift_code');
            $show->field('bank_branch');
            $show->field('contact_full_name');
            $show->field('contact_phone_no');
            $show->field('contact_email');
            $show->field('contact_address');
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
        return Form::make(new ErpUsersDetail(), function (Form $form) {
            $form->display('id');
            $form->text('user_id');
            $form->text('employee_id');
            $form->text('department_id');
            $form->text('designation_id');
            $form->text('office_shift_id');
            $form->number('basic_salary');
            $form->number('hourly_rate');
            
            $salaryType = ['allowances','commissions','statutory','other_payments'];
            $form->select('salary_type')->options($salaryType);
            $form->text('role_description');
            $form->date('date_of_joining');
            $form->date('date_of_leaving');
            $form->date('date_of_birth');
            $form->text('marital_status');
            $form->text('religion_id');
            $form->text('blood_group');
            $form->text('citizenship_id');
            $form->text('bio');
            $form->text('experience');
            $form->text('fb_profile');
            $form->text('twitter_profile');
            $form->text('gplus_profile');
            $form->text('linkedin_profile');
            $form->text('account_title');
            $form->text('account_number');
            $form->text('bank_name');
            $form->text('iban');
            $form->text('swift_code');
            $form->text('bank_branch');
            $form->text('contact_full_name');
            $form->mobile('contact_phone_no');
            $form->email('contact_email');
            $form->text('contact_address');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
