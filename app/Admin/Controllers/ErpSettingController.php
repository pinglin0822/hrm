<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\ErpSetting;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ErpSettingController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new ErpSetting(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('application_name');
            $grid->column('company_name');
            $grid->column('trading_name');
            $grid->column('registration_no');
            $grid->column('government_tax');
            $grid->column('company_type_id');
            $grid->column('email');
            $grid->column('contact_number');
            $grid->column('country');
            $grid->column('address_1');
            $grid->column('address_2');
            $grid->column('city');
            $grid->column('zipcode');
            $grid->column('state');
            $grid->column('default_currency');
            $grid->column('is_ssl_available')->display(function ($is_ssl_available) {
                return $is_ssl_available ? 'true' : 'false';
            });
            $grid->column('currency_converter');
            $grid->column('notification_position');
            $grid->column('notification_close_btn');
            $grid->column('notification_bar');
            $grid->column('date_format_xi');
            $grid->column('enable_email_notification');
            $grid->column('email_type');
            $grid->column('logo');
            $grid->column('favicon');
            $grid->column('frontend_logo');
            $grid->column('other_logo');
            $grid->column('animation_effect');
            $grid->column('animation_effect_modal');
            $grid->column('animation_effect_topmenu');
            $grid->column('default_language');
            $grid->column('system_timezone');
            $grid->column('paypal_email');
            $grid->column('paypal_sandbox');
            $grid->column('paypal_active');
            $grid->column('stripe_secret_key');
            $grid->column('stripe_publishable_key');
            $grid->column('stripe_active');
            $grid->column('online_payment_account');
            $grid->column('invoice_terms_condition');
            $grid->column('auth_background');
            $grid->column('hr_version');
            $grid->column('hr_release_date');
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
        return Show::make($id, new ErpSetting(), function (Show $show) {
            $show->field('id');
            $show->field('application_name');
            $show->field('company_name');
            $show->field('trading_name');
            $show->field('registration_no');
            $show->field('government_tax');
            $show->field('company_type_id');
            $show->field('email');
            $show->field('contact_number');
            $show->field('country');
            $show->field('address_1');
            $show->field('address_2');
            $show->field('city');
            $show->field('zipcode');
            $show->field('state');
            $show->field('default_currency');
            $show->field('is_ssl_available');
            $show->field('currency_converter');
            $show->field('notification_position');
            $show->field('notification_close_btn');
            $show->field('notification_bar');
            $show->field('date_format_xi');
            $show->field('enable_email_notification');
            $show->field('email_type');
            $show->field('logo');
            $show->field('favicon');
            $show->field('frontend_logo');
            $show->field('other_logo');
            $show->field('animation_effect');
            $show->field('animation_effect_modal');
            $show->field('animation_effect_topmenu');
            $show->field('default_language');
            $show->field('system_timezone');
            $show->field('paypal_email');
            $show->field('paypal_sandbox');
            $show->field('paypal_active');
            $show->field('stripe_secret_key');
            $show->field('stripe_publishable_key');
            $show->field('stripe_active');
            $show->field('online_payment_account');
            $show->field('invoice_terms_condition');
            $show->field('auth_background');
            $show->field('hr_version');
            $show->field('hr_release_date');
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
        return Form::make(new ErpSetting(), function (Form $form) {
            $form->display('id');
            $form->text('application_name');
            $form->text('company_name');
            $form->text('trading_name');
            $form->text('registration_no');
            $form->number('government_tax');
            $form->text('company_type_id');
            $form->email('email');
            $form->mobile('contact_number');
            $form->text('country');
            $form->text('address_1');
            $form->text('address_2');
            $form->text('city');
            $form->text('zipcode');
            $form->text('state');
            $form->text('default_currency');
            $form->switch('is_ssl_available');
            $form->text('currency_converter');
            $form->text('notification_position');
            $form->text('notification_close_btn');
            $form->text('notification_bar');
            $form->text('date_format_xi');
            $form->text('enable_email_notification');
            $form->text('email_type');
            $form->text('logo');
            $form->text('favicon');
            $form->text('frontend_logo');
            $form->text('other_logo');
            $form->text('animation_effect');
            $form->text('animation_effect_modal');
            $form->text('animation_effect_topmenu');
            $form->text('default_language');
            $form->text('system_timezone');
            $form->email('paypal_email');
            $form->text('paypal_sandbox');
            $form->text('paypal_active');
            $form->text('stripe_secret_key');
            $form->text('stripe_publishable_key');
            $form->text('stripe_active');
            $form->text('online_payment_account');
            $form->text('invoice_terms_condition');
            $form->text('auth_background');
            $form->text('hr_version');
            $form->date('hr_release_date');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
