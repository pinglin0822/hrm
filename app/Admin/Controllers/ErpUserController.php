<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\ErpUser;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ErpUserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new ErpUser(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('user_role_id');
            $grid->column('user_type(staff)');
            $grid->column('company_id');
            $grid->column('first_name');
            $grid->column('last_name');
            $grid->column('email');
            $grid->column('username');
            $grid->column('password');
            $grid->column('company_name');
            $grid->column('trading_name');
            $grid->column('registration_no');
            $grid->column('government_tax');
            $grid->column('company_type_id');
            $grid->column('profile_photo');
            $grid->column('contact_number');
            $grid->column('gender')->display(function ($gender){
                switch($gender){
                    default: return null;
                    case 0:return 'Male';
                    case 1:return 'Female';
                }
            });
            $grid->column('address_1');
            $grid->column('address_2');
            $grid->column('city');
            $grid->column('state');
            $grid->column('zipcode');
            $grid->column('country');
            $grid->column('last_login_date');
            $grid->column('last_logout_date');
            $grid->column('last_login_ip');
            $grid->column('is_logged_in')->display(function ($is_logged_in) {
                return $is_logged_in ? 'true' : 'false';
            });
            $grid->column('is_active')->display(function ($is_active) {
                return $is_active ? 'true' : 'false';
            });
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
        return Show::make($id, new ErpUser(), function (Show $show) {
            $show->field('id');
            $show->field('user_role_id');
            $show->field('user_type(staff)');
            $show->field('company_id');
            $show->field('first_name');
            $show->field('last_name');
            $show->field('email');
            $show->field('username');
            $show->field('password');
            $show->field('company_name');
            $show->field('trading_name');
            $show->field('registration_no');
            $show->field('government_tax');
            $show->field('company_type_id');
            $show->field('profile_photo');
            $show->field('contact_number');
            $show->field('gender');
            $show->field('address_1');
            $show->field('address_2');
            $show->field('city');
            $show->field('state');
            $show->field('zipcode');
            $show->field('country');
            $show->field('last_login_date');
            $show->field('last_logout_date');
            $show->field('last_login_ip');
            $show->field('is_logged_in');
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
        return Form::make(new ErpUser(), function (Form $form) {
            $form->display('id');
            $form->text('user_role_id');
            $form->text('user_type(staff)');
            $form->text('company_id');
            $form->text('first_name');
            $form->text('last_name');
            $form->email('email');
            $form->text('username');
            $form->password('password');
            $form->text('company_name');
            $form->text('trading_name');
            $form->text('registration_no');
            $form->number('government_tax');
            $form->text('company_type_id');
            $form->text('profile_photo');
            $form->mobile('contact_number');
            $form->radio('gender')->options(['male','female'])->default(0);
            $form->text('address_1');
            $form->text('address_2');
            $form->text('city');
            $form->text('state');
            $form->text('zipcode');
            $form->text('country');
            $form->date('last_login_date')->default(date('Y-m-d'));
            $form->date('last_logout_date')->default(date('Y-m-d'));
            $form->ip('last_login_ip');
            $form->switch('is_logged_in')->default(true);
            $form->switch('is_active')->default(true);
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
