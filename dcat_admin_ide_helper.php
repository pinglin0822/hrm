<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection alias
     * @property Grid\Column|Collection authors
     * @property Grid\Column|Collection enable
     * @property Grid\Column|Collection imported
     * @property Grid\Column|Collection config
     * @property Grid\Column|Collection require
     * @property Grid\Column|Collection require_dev
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection method
     * @property Grid\Column|Collection ip
     * @property Grid\Column|Collection input
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection company_id
     * @property Grid\Column|Collection department_id
     * @property Grid\Column|Collection start_date
     * @property Grid\Column|Collection end_date
     * @property Grid\Column|Collection published_by
     * @property Grid\Column|Collection summary
     * @property Grid\Column|Collection is_active
     * @property Grid\Column|Collection assets_category_id
     * @property Grid\Column|Collection brand_id
     * @property Grid\Column|Collection employee_id
     * @property Grid\Column|Collection company_asset_code
     * @property Grid\Column|Collection purchase_date
     * @property Grid\Column|Collection invoice_number
     * @property Grid\Column|Collection manufacturer
     * @property Grid\Column|Collection serial_number
     * @property Grid\Column|Collection warranty_end_date
     * @property Grid\Column|Collection asset_note
     * @property Grid\Column|Collection asset_image
     * @property Grid\Column|Collection is_working
     * @property Grid\Column|Collection salary_type
     * @property Grid\Column|Collection contract_tax_option
     * @property Grid\Column|Collection is_fixed
     * @property Grid\Column|Collection option_title
     * @property Grid\Column|Collection contract_amount
     * @property Grid\Column|Collection department_name
     * @property Grid\Column|Collection department_head
     * @property Grid\Column|Collection added_by
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection designation_name
     * @property Grid\Column|Collection template_code
     * @property Grid\Column|Collection template_type
     * @property Grid\Column|Collection subject
     * @property Grid\Column|Collection message
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection category_name
     * @property Grid\Column|Collection field_one
     * @property Grid\Column|Collection field_two
     * @property Grid\Column|Collection application_name
     * @property Grid\Column|Collection company_name
     * @property Grid\Column|Collection trading_name
     * @property Grid\Column|Collection registration_no
     * @property Grid\Column|Collection government_tax
     * @property Grid\Column|Collection company_type_id
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection contact_number
     * @property Grid\Column|Collection country
     * @property Grid\Column|Collection address_1
     * @property Grid\Column|Collection address_2
     * @property Grid\Column|Collection city
     * @property Grid\Column|Collection zipcode
     * @property Grid\Column|Collection state
     * @property Grid\Column|Collection default_currency
     * @property Grid\Column|Collection is_ssl_available
     * @property Grid\Column|Collection currency_converter
     * @property Grid\Column|Collection notification_position
     * @property Grid\Column|Collection notification_close_btn
     * @property Grid\Column|Collection notification_bar
     * @property Grid\Column|Collection date_format_xi
     * @property Grid\Column|Collection enable_email_notification
     * @property Grid\Column|Collection email_type
     * @property Grid\Column|Collection logo
     * @property Grid\Column|Collection favicon
     * @property Grid\Column|Collection frontend_logo
     * @property Grid\Column|Collection other_logo
     * @property Grid\Column|Collection animation_effect
     * @property Grid\Column|Collection animation_effect_modal
     * @property Grid\Column|Collection animation_effect_topmenu
     * @property Grid\Column|Collection default_language
     * @property Grid\Column|Collection system_timezone
     * @property Grid\Column|Collection paypal_email
     * @property Grid\Column|Collection paypal_sandbox
     * @property Grid\Column|Collection paypal_active
     * @property Grid\Column|Collection stripe_secret_key
     * @property Grid\Column|Collection stripe_publishable_key
     * @property Grid\Column|Collection stripe_active
     * @property Grid\Column|Collection online_payment_account
     * @property Grid\Column|Collection invoice_terms_condition
     * @property Grid\Column|Collection auth_background
     * @property Grid\Column|Collection hr_version
     * @property Grid\Column|Collection hr_release_date
     * @property Grid\Column|Collection user_role_id
     * @property Grid\Column|Collection user_type(staff)
     * @property Grid\Column|Collection first_name
     * @property Grid\Column|Collection last_name
     * @property Grid\Column|Collection profile_photo
     * @property Grid\Column|Collection gender
     * @property Grid\Column|Collection last_login_date
     * @property Grid\Column|Collection last_logout_date
     * @property Grid\Column|Collection last_login_ip
     * @property Grid\Column|Collection is_logged_in
     * @property Grid\Column|Collection designation_id
     * @property Grid\Column|Collection office_shift_id
     * @property Grid\Column|Collection basic_salary
     * @property Grid\Column|Collection hourly_rate
     * @property Grid\Column|Collection role_description
     * @property Grid\Column|Collection date_of_joining
     * @property Grid\Column|Collection date_of_leaving
     * @property Grid\Column|Collection date_of_birth
     * @property Grid\Column|Collection marital_status
     * @property Grid\Column|Collection religion_id
     * @property Grid\Column|Collection blood_group
     * @property Grid\Column|Collection citizenship_id
     * @property Grid\Column|Collection bio
     * @property Grid\Column|Collection experience
     * @property Grid\Column|Collection fb_profile
     * @property Grid\Column|Collection twitter_profile
     * @property Grid\Column|Collection gplus_profile
     * @property Grid\Column|Collection linkedin_profile
     * @property Grid\Column|Collection account_title
     * @property Grid\Column|Collection account_number
     * @property Grid\Column|Collection bank_name
     * @property Grid\Column|Collection iban
     * @property Grid\Column|Collection swift_code
     * @property Grid\Column|Collection bank_branch
     * @property Grid\Column|Collection contact_full_name
     * @property Grid\Column|Collection contact_phone_no
     * @property Grid\Column|Collection contact_email
     * @property Grid\Column|Collection contact_address
     * @property Grid\Column|Collection event_title
     * @property Grid\Column|Collection event_date
     * @property Grid\Column|Collection event_time
     * @property Grid\Column|Collection event_note
     * @property Grid\Column|Collection event_color
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection account_name
     * @property Grid\Column|Collection account_balance
     * @property Grid\Column|Collection account_opening_balance
     * @property Grid\Column|Collection branch_code
     * @property Grid\Column|Collection account_id
     * @property Grid\Column|Collection staff_id
     * @property Grid\Column|Collection transaction_date
     * @property Grid\Column|Collection transaction_type
     * @property Grid\Column|Collection entity_id
     * @property Grid\Column|Collection entity_type
     * @property Grid\Column|Collection entity_category_id
     * @property Grid\Column|Collection amount
     * @property Grid\Column|Collection dr_cr
     * @property Grid\Column|Collection payment_method_id
     * @property Grid\Column|Collection reference
     * @property Grid\Column|Collection attachment_file
     * @property Grid\Column|Collection event_name
     * @property Grid\Column|Collection is_published
     * @property Grid\Column|Collection client_id
     * @property Grid\Column|Collection project_id
     * @property Grid\Column|Collection invoice_month
     * @property Grid\Column|Collection invoice_date
     * @property Grid\Column|Collection invoice_due_date
     * @property Grid\Column|Collection sub_total_amount
     * @property Grid\Column|Collection discount_type
     * @property Grid\Column|Collection discount_figure
     * @property Grid\Column|Collection total_tax
     * @property Grid\Column|Collection tax_type
     * @property Grid\Column|Collection total_discount
     * @property Grid\Column|Collection grand_total
     * @property Grid\Column|Collection invoice_note
     * @property Grid\Column|Collection payment_method
     * @property Grid\Column|Collection invoice_id
     * @property Grid\Column|Collection item_name
     * @property Grid\Column|Collection item_qty
     * @property Grid\Column|Collection item_unit_price
     * @property Grid\Column|Collection item_sub_total
     * @property Grid\Column|Collection language_name
     * @property Grid\Column|Collection language_code
     * @property Grid\Column|Collection language_flag
     * @property Grid\Column|Collection leave_type_id
     * @property Grid\Column|Collection from_date
     * @property Grid\Column|Collection to_date
     * @property Grid\Column|Collection reason
     * @property Grid\Column|Collection remarks
     * @property Grid\Column|Collection is_half_day
     * @property Grid\Column|Collection leave_attachment
     * @property Grid\Column|Collection shift_name
     * @property Grid\Column|Collection monday_in_time
     * @property Grid\Column|Collection monday_out_time
     * @property Grid\Column|Collection tuesday_in_time
     * @property Grid\Column|Collection tuesday_out_time
     * @property Grid\Column|Collection wednesday_in_time
     * @property Grid\Column|Collection wednesday_out_time
     * @property Grid\Column|Collection thursday_in_time
     * @property Grid\Column|Collection thursday_out_time
     * @property Grid\Column|Collection friday_in_time
     * @property Grid\Column|Collection friday_out_time
     * @property Grid\Column|Collection saturday_in_time
     * @property Grid\Column|Collection saturday_out_time
     * @property Grid\Column|Collection sunday_in_time
     * @property Grid\Column|Collection sunday_out_time
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection payslip_key
     * @property Grid\Column|Collection salary_month
     * @property Grid\Column|Collection wages_type
     * @property Grid\Column|Collection payslip_type
     * @property Grid\Column|Collection daily_wages
     * @property Grid\Column|Collection hours_worked
     * @property Grid\Column|Collection total_allowances
     * @property Grid\Column|Collection total_commissions
     * @property Grid\Column|Collection total_statutory_deductions
     * @property Grid\Column|Collection total_other_payments
     * @property Grid\Column|Collection net_salary
     * @property Grid\Column|Collection pay_comments
     * @property Grid\Column|Collection is_payment
     * @property Grid\Column|Collection year_to_date
     * @property Grid\Column|Collection is_advance_salary_deduct
     * @property Grid\Column|Collection advance_salary_amount
     * @property Grid\Column|Collection is_loan_deduct
     * @property Grid\Column|Collection loan_amount
     * @property Grid\Column|Collection payslip_id
     * @property Grid\Column|Collection is_taxable
     * @property Grid\Column|Collection pay_title
     * @property Grid\Column|Collection pay_amount
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection attachment
     * @property Grid\Column|Collection role_name
     * @property Grid\Column|Collection role_access
     * @property Grid\Column|Collection role_resources
     * @property Grid\Column|Collection attendance_date
     * @property Grid\Column|Collection clock_in
     * @property Grid\Column|Collection clock_in_ip_address
     * @property Grid\Column|Collection clock_out
     * @property Grid\Column|Collection clock_out_ip_address
     * @property Grid\Column|Collection clock_in_out
     * @property Grid\Column|Collection clock_in_latitude
     * @property Grid\Column|Collection clock_in_longitude
     * @property Grid\Column|Collection clock_out_latitude
     * @property Grid\Column|Collection clock_out_longitude
     * @property Grid\Column|Collection time_late
     * @property Grid\Column|Collection early_leaving
     * @property Grid\Column|Collection overtime
     * @property Grid\Column|Collection total_work
     * @property Grid\Column|Collection total_rest
     * @property Grid\Column|Collection attendance_status
     * @property Grid\Column|Collection request_date
     * @property Grid\Column|Collection request_month
     * @property Grid\Column|Collection total_hours
     * @property Grid\Column|Collection request_reason
     * @property Grid\Column|Collection is_approved
     * @property Grid\Column|Collection email_verified_at
     *
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection alias(string $label = null)
     * @method Grid\Column|Collection authors(string $label = null)
     * @method Grid\Column|Collection enable(string $label = null)
     * @method Grid\Column|Collection imported(string $label = null)
     * @method Grid\Column|Collection config(string $label = null)
     * @method Grid\Column|Collection require(string $label = null)
     * @method Grid\Column|Collection require_dev(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection method(string $label = null)
     * @method Grid\Column|Collection ip(string $label = null)
     * @method Grid\Column|Collection input(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection company_id(string $label = null)
     * @method Grid\Column|Collection department_id(string $label = null)
     * @method Grid\Column|Collection start_date(string $label = null)
     * @method Grid\Column|Collection end_date(string $label = null)
     * @method Grid\Column|Collection published_by(string $label = null)
     * @method Grid\Column|Collection summary(string $label = null)
     * @method Grid\Column|Collection is_active(string $label = null)
     * @method Grid\Column|Collection assets_category_id(string $label = null)
     * @method Grid\Column|Collection brand_id(string $label = null)
     * @method Grid\Column|Collection employee_id(string $label = null)
     * @method Grid\Column|Collection company_asset_code(string $label = null)
     * @method Grid\Column|Collection purchase_date(string $label = null)
     * @method Grid\Column|Collection invoice_number(string $label = null)
     * @method Grid\Column|Collection manufacturer(string $label = null)
     * @method Grid\Column|Collection serial_number(string $label = null)
     * @method Grid\Column|Collection warranty_end_date(string $label = null)
     * @method Grid\Column|Collection asset_note(string $label = null)
     * @method Grid\Column|Collection asset_image(string $label = null)
     * @method Grid\Column|Collection is_working(string $label = null)
     * @method Grid\Column|Collection salary_type(string $label = null)
     * @method Grid\Column|Collection contract_tax_option(string $label = null)
     * @method Grid\Column|Collection is_fixed(string $label = null)
     * @method Grid\Column|Collection option_title(string $label = null)
     * @method Grid\Column|Collection contract_amount(string $label = null)
     * @method Grid\Column|Collection department_name(string $label = null)
     * @method Grid\Column|Collection department_head(string $label = null)
     * @method Grid\Column|Collection added_by(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection designation_name(string $label = null)
     * @method Grid\Column|Collection template_code(string $label = null)
     * @method Grid\Column|Collection template_type(string $label = null)
     * @method Grid\Column|Collection subject(string $label = null)
     * @method Grid\Column|Collection message(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection category_name(string $label = null)
     * @method Grid\Column|Collection field_one(string $label = null)
     * @method Grid\Column|Collection field_two(string $label = null)
     * @method Grid\Column|Collection application_name(string $label = null)
     * @method Grid\Column|Collection company_name(string $label = null)
     * @method Grid\Column|Collection trading_name(string $label = null)
     * @method Grid\Column|Collection registration_no(string $label = null)
     * @method Grid\Column|Collection government_tax(string $label = null)
     * @method Grid\Column|Collection company_type_id(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection contact_number(string $label = null)
     * @method Grid\Column|Collection country(string $label = null)
     * @method Grid\Column|Collection address_1(string $label = null)
     * @method Grid\Column|Collection address_2(string $label = null)
     * @method Grid\Column|Collection city(string $label = null)
     * @method Grid\Column|Collection zipcode(string $label = null)
     * @method Grid\Column|Collection state(string $label = null)
     * @method Grid\Column|Collection default_currency(string $label = null)
     * @method Grid\Column|Collection is_ssl_available(string $label = null)
     * @method Grid\Column|Collection currency_converter(string $label = null)
     * @method Grid\Column|Collection notification_position(string $label = null)
     * @method Grid\Column|Collection notification_close_btn(string $label = null)
     * @method Grid\Column|Collection notification_bar(string $label = null)
     * @method Grid\Column|Collection date_format_xi(string $label = null)
     * @method Grid\Column|Collection enable_email_notification(string $label = null)
     * @method Grid\Column|Collection email_type(string $label = null)
     * @method Grid\Column|Collection logo(string $label = null)
     * @method Grid\Column|Collection favicon(string $label = null)
     * @method Grid\Column|Collection frontend_logo(string $label = null)
     * @method Grid\Column|Collection other_logo(string $label = null)
     * @method Grid\Column|Collection animation_effect(string $label = null)
     * @method Grid\Column|Collection animation_effect_modal(string $label = null)
     * @method Grid\Column|Collection animation_effect_topmenu(string $label = null)
     * @method Grid\Column|Collection default_language(string $label = null)
     * @method Grid\Column|Collection system_timezone(string $label = null)
     * @method Grid\Column|Collection paypal_email(string $label = null)
     * @method Grid\Column|Collection paypal_sandbox(string $label = null)
     * @method Grid\Column|Collection paypal_active(string $label = null)
     * @method Grid\Column|Collection stripe_secret_key(string $label = null)
     * @method Grid\Column|Collection stripe_publishable_key(string $label = null)
     * @method Grid\Column|Collection stripe_active(string $label = null)
     * @method Grid\Column|Collection online_payment_account(string $label = null)
     * @method Grid\Column|Collection invoice_terms_condition(string $label = null)
     * @method Grid\Column|Collection auth_background(string $label = null)
     * @method Grid\Column|Collection hr_version(string $label = null)
     * @method Grid\Column|Collection hr_release_date(string $label = null)
     * @method Grid\Column|Collection user_role_id(string $label = null)
     * @method Grid\Column|Collection user_type(staff)(string $label = null)
     * @method Grid\Column|Collection first_name(string $label = null)
     * @method Grid\Column|Collection last_name(string $label = null)
     * @method Grid\Column|Collection profile_photo(string $label = null)
     * @method Grid\Column|Collection gender(string $label = null)
     * @method Grid\Column|Collection last_login_date(string $label = null)
     * @method Grid\Column|Collection last_logout_date(string $label = null)
     * @method Grid\Column|Collection last_login_ip(string $label = null)
     * @method Grid\Column|Collection is_logged_in(string $label = null)
     * @method Grid\Column|Collection designation_id(string $label = null)
     * @method Grid\Column|Collection office_shift_id(string $label = null)
     * @method Grid\Column|Collection basic_salary(string $label = null)
     * @method Grid\Column|Collection hourly_rate(string $label = null)
     * @method Grid\Column|Collection role_description(string $label = null)
     * @method Grid\Column|Collection date_of_joining(string $label = null)
     * @method Grid\Column|Collection date_of_leaving(string $label = null)
     * @method Grid\Column|Collection date_of_birth(string $label = null)
     * @method Grid\Column|Collection marital_status(string $label = null)
     * @method Grid\Column|Collection religion_id(string $label = null)
     * @method Grid\Column|Collection blood_group(string $label = null)
     * @method Grid\Column|Collection citizenship_id(string $label = null)
     * @method Grid\Column|Collection bio(string $label = null)
     * @method Grid\Column|Collection experience(string $label = null)
     * @method Grid\Column|Collection fb_profile(string $label = null)
     * @method Grid\Column|Collection twitter_profile(string $label = null)
     * @method Grid\Column|Collection gplus_profile(string $label = null)
     * @method Grid\Column|Collection linkedin_profile(string $label = null)
     * @method Grid\Column|Collection account_title(string $label = null)
     * @method Grid\Column|Collection account_number(string $label = null)
     * @method Grid\Column|Collection bank_name(string $label = null)
     * @method Grid\Column|Collection iban(string $label = null)
     * @method Grid\Column|Collection swift_code(string $label = null)
     * @method Grid\Column|Collection bank_branch(string $label = null)
     * @method Grid\Column|Collection contact_full_name(string $label = null)
     * @method Grid\Column|Collection contact_phone_no(string $label = null)
     * @method Grid\Column|Collection contact_email(string $label = null)
     * @method Grid\Column|Collection contact_address(string $label = null)
     * @method Grid\Column|Collection event_title(string $label = null)
     * @method Grid\Column|Collection event_date(string $label = null)
     * @method Grid\Column|Collection event_time(string $label = null)
     * @method Grid\Column|Collection event_note(string $label = null)
     * @method Grid\Column|Collection event_color(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection account_name(string $label = null)
     * @method Grid\Column|Collection account_balance(string $label = null)
     * @method Grid\Column|Collection account_opening_balance(string $label = null)
     * @method Grid\Column|Collection branch_code(string $label = null)
     * @method Grid\Column|Collection account_id(string $label = null)
     * @method Grid\Column|Collection staff_id(string $label = null)
     * @method Grid\Column|Collection transaction_date(string $label = null)
     * @method Grid\Column|Collection transaction_type(string $label = null)
     * @method Grid\Column|Collection entity_id(string $label = null)
     * @method Grid\Column|Collection entity_type(string $label = null)
     * @method Grid\Column|Collection entity_category_id(string $label = null)
     * @method Grid\Column|Collection amount(string $label = null)
     * @method Grid\Column|Collection dr_cr(string $label = null)
     * @method Grid\Column|Collection payment_method_id(string $label = null)
     * @method Grid\Column|Collection reference(string $label = null)
     * @method Grid\Column|Collection attachment_file(string $label = null)
     * @method Grid\Column|Collection event_name(string $label = null)
     * @method Grid\Column|Collection is_published(string $label = null)
     * @method Grid\Column|Collection client_id(string $label = null)
     * @method Grid\Column|Collection project_id(string $label = null)
     * @method Grid\Column|Collection invoice_month(string $label = null)
     * @method Grid\Column|Collection invoice_date(string $label = null)
     * @method Grid\Column|Collection invoice_due_date(string $label = null)
     * @method Grid\Column|Collection sub_total_amount(string $label = null)
     * @method Grid\Column|Collection discount_type(string $label = null)
     * @method Grid\Column|Collection discount_figure(string $label = null)
     * @method Grid\Column|Collection total_tax(string $label = null)
     * @method Grid\Column|Collection tax_type(string $label = null)
     * @method Grid\Column|Collection total_discount(string $label = null)
     * @method Grid\Column|Collection grand_total(string $label = null)
     * @method Grid\Column|Collection invoice_note(string $label = null)
     * @method Grid\Column|Collection payment_method(string $label = null)
     * @method Grid\Column|Collection invoice_id(string $label = null)
     * @method Grid\Column|Collection item_name(string $label = null)
     * @method Grid\Column|Collection item_qty(string $label = null)
     * @method Grid\Column|Collection item_unit_price(string $label = null)
     * @method Grid\Column|Collection item_sub_total(string $label = null)
     * @method Grid\Column|Collection language_name(string $label = null)
     * @method Grid\Column|Collection language_code(string $label = null)
     * @method Grid\Column|Collection language_flag(string $label = null)
     * @method Grid\Column|Collection leave_type_id(string $label = null)
     * @method Grid\Column|Collection from_date(string $label = null)
     * @method Grid\Column|Collection to_date(string $label = null)
     * @method Grid\Column|Collection reason(string $label = null)
     * @method Grid\Column|Collection remarks(string $label = null)
     * @method Grid\Column|Collection is_half_day(string $label = null)
     * @method Grid\Column|Collection leave_attachment(string $label = null)
     * @method Grid\Column|Collection shift_name(string $label = null)
     * @method Grid\Column|Collection monday_in_time(string $label = null)
     * @method Grid\Column|Collection monday_out_time(string $label = null)
     * @method Grid\Column|Collection tuesday_in_time(string $label = null)
     * @method Grid\Column|Collection tuesday_out_time(string $label = null)
     * @method Grid\Column|Collection wednesday_in_time(string $label = null)
     * @method Grid\Column|Collection wednesday_out_time(string $label = null)
     * @method Grid\Column|Collection thursday_in_time(string $label = null)
     * @method Grid\Column|Collection thursday_out_time(string $label = null)
     * @method Grid\Column|Collection friday_in_time(string $label = null)
     * @method Grid\Column|Collection friday_out_time(string $label = null)
     * @method Grid\Column|Collection saturday_in_time(string $label = null)
     * @method Grid\Column|Collection saturday_out_time(string $label = null)
     * @method Grid\Column|Collection sunday_in_time(string $label = null)
     * @method Grid\Column|Collection sunday_out_time(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection payslip_key(string $label = null)
     * @method Grid\Column|Collection salary_month(string $label = null)
     * @method Grid\Column|Collection wages_type(string $label = null)
     * @method Grid\Column|Collection payslip_type(string $label = null)
     * @method Grid\Column|Collection daily_wages(string $label = null)
     * @method Grid\Column|Collection hours_worked(string $label = null)
     * @method Grid\Column|Collection total_allowances(string $label = null)
     * @method Grid\Column|Collection total_commissions(string $label = null)
     * @method Grid\Column|Collection total_statutory_deductions(string $label = null)
     * @method Grid\Column|Collection total_other_payments(string $label = null)
     * @method Grid\Column|Collection net_salary(string $label = null)
     * @method Grid\Column|Collection pay_comments(string $label = null)
     * @method Grid\Column|Collection is_payment(string $label = null)
     * @method Grid\Column|Collection year_to_date(string $label = null)
     * @method Grid\Column|Collection is_advance_salary_deduct(string $label = null)
     * @method Grid\Column|Collection advance_salary_amount(string $label = null)
     * @method Grid\Column|Collection is_loan_deduct(string $label = null)
     * @method Grid\Column|Collection loan_amount(string $label = null)
     * @method Grid\Column|Collection payslip_id(string $label = null)
     * @method Grid\Column|Collection is_taxable(string $label = null)
     * @method Grid\Column|Collection pay_title(string $label = null)
     * @method Grid\Column|Collection pay_amount(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection attachment(string $label = null)
     * @method Grid\Column|Collection role_name(string $label = null)
     * @method Grid\Column|Collection role_access(string $label = null)
     * @method Grid\Column|Collection role_resources(string $label = null)
     * @method Grid\Column|Collection attendance_date(string $label = null)
     * @method Grid\Column|Collection clock_in(string $label = null)
     * @method Grid\Column|Collection clock_in_ip_address(string $label = null)
     * @method Grid\Column|Collection clock_out(string $label = null)
     * @method Grid\Column|Collection clock_out_ip_address(string $label = null)
     * @method Grid\Column|Collection clock_in_out(string $label = null)
     * @method Grid\Column|Collection clock_in_latitude(string $label = null)
     * @method Grid\Column|Collection clock_in_longitude(string $label = null)
     * @method Grid\Column|Collection clock_out_latitude(string $label = null)
     * @method Grid\Column|Collection clock_out_longitude(string $label = null)
     * @method Grid\Column|Collection time_late(string $label = null)
     * @method Grid\Column|Collection early_leaving(string $label = null)
     * @method Grid\Column|Collection overtime(string $label = null)
     * @method Grid\Column|Collection total_work(string $label = null)
     * @method Grid\Column|Collection total_rest(string $label = null)
     * @method Grid\Column|Collection attendance_status(string $label = null)
     * @method Grid\Column|Collection request_date(string $label = null)
     * @method Grid\Column|Collection request_month(string $label = null)
     * @method Grid\Column|Collection total_hours(string $label = null)
     * @method Grid\Column|Collection request_reason(string $label = null)
     * @method Grid\Column|Collection is_approved(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection name
     * @property Show\Field|Collection version
     * @property Show\Field|Collection alias
     * @property Show\Field|Collection authors
     * @property Show\Field|Collection enable
     * @property Show\Field|Collection imported
     * @property Show\Field|Collection config
     * @property Show\Field|Collection require
     * @property Show\Field|Collection require_dev
     * @property Show\Field|Collection id
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection path
     * @property Show\Field|Collection method
     * @property Show\Field|Collection ip
     * @property Show\Field|Collection input
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection company_id
     * @property Show\Field|Collection department_id
     * @property Show\Field|Collection start_date
     * @property Show\Field|Collection end_date
     * @property Show\Field|Collection published_by
     * @property Show\Field|Collection summary
     * @property Show\Field|Collection is_active
     * @property Show\Field|Collection assets_category_id
     * @property Show\Field|Collection brand_id
     * @property Show\Field|Collection employee_id
     * @property Show\Field|Collection company_asset_code
     * @property Show\Field|Collection purchase_date
     * @property Show\Field|Collection invoice_number
     * @property Show\Field|Collection manufacturer
     * @property Show\Field|Collection serial_number
     * @property Show\Field|Collection warranty_end_date
     * @property Show\Field|Collection asset_note
     * @property Show\Field|Collection asset_image
     * @property Show\Field|Collection is_working
     * @property Show\Field|Collection salary_type
     * @property Show\Field|Collection contract_tax_option
     * @property Show\Field|Collection is_fixed
     * @property Show\Field|Collection option_title
     * @property Show\Field|Collection contract_amount
     * @property Show\Field|Collection department_name
     * @property Show\Field|Collection department_head
     * @property Show\Field|Collection added_by
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection designation_name
     * @property Show\Field|Collection template_code
     * @property Show\Field|Collection template_type
     * @property Show\Field|Collection subject
     * @property Show\Field|Collection message
     * @property Show\Field|Collection status
     * @property Show\Field|Collection type
     * @property Show\Field|Collection category_name
     * @property Show\Field|Collection field_one
     * @property Show\Field|Collection field_two
     * @property Show\Field|Collection application_name
     * @property Show\Field|Collection company_name
     * @property Show\Field|Collection trading_name
     * @property Show\Field|Collection registration_no
     * @property Show\Field|Collection government_tax
     * @property Show\Field|Collection company_type_id
     * @property Show\Field|Collection email
     * @property Show\Field|Collection contact_number
     * @property Show\Field|Collection country
     * @property Show\Field|Collection address_1
     * @property Show\Field|Collection address_2
     * @property Show\Field|Collection city
     * @property Show\Field|Collection zipcode
     * @property Show\Field|Collection state
     * @property Show\Field|Collection default_currency
     * @property Show\Field|Collection is_ssl_available
     * @property Show\Field|Collection currency_converter
     * @property Show\Field|Collection notification_position
     * @property Show\Field|Collection notification_close_btn
     * @property Show\Field|Collection notification_bar
     * @property Show\Field|Collection date_format_xi
     * @property Show\Field|Collection enable_email_notification
     * @property Show\Field|Collection email_type
     * @property Show\Field|Collection logo
     * @property Show\Field|Collection favicon
     * @property Show\Field|Collection frontend_logo
     * @property Show\Field|Collection other_logo
     * @property Show\Field|Collection animation_effect
     * @property Show\Field|Collection animation_effect_modal
     * @property Show\Field|Collection animation_effect_topmenu
     * @property Show\Field|Collection default_language
     * @property Show\Field|Collection system_timezone
     * @property Show\Field|Collection paypal_email
     * @property Show\Field|Collection paypal_sandbox
     * @property Show\Field|Collection paypal_active
     * @property Show\Field|Collection stripe_secret_key
     * @property Show\Field|Collection stripe_publishable_key
     * @property Show\Field|Collection stripe_active
     * @property Show\Field|Collection online_payment_account
     * @property Show\Field|Collection invoice_terms_condition
     * @property Show\Field|Collection auth_background
     * @property Show\Field|Collection hr_version
     * @property Show\Field|Collection hr_release_date
     * @property Show\Field|Collection user_role_id
     * @property Show\Field|Collection user_type(staff)
     * @property Show\Field|Collection first_name
     * @property Show\Field|Collection last_name
     * @property Show\Field|Collection profile_photo
     * @property Show\Field|Collection gender
     * @property Show\Field|Collection last_login_date
     * @property Show\Field|Collection last_logout_date
     * @property Show\Field|Collection last_login_ip
     * @property Show\Field|Collection is_logged_in
     * @property Show\Field|Collection designation_id
     * @property Show\Field|Collection office_shift_id
     * @property Show\Field|Collection basic_salary
     * @property Show\Field|Collection hourly_rate
     * @property Show\Field|Collection role_description
     * @property Show\Field|Collection date_of_joining
     * @property Show\Field|Collection date_of_leaving
     * @property Show\Field|Collection date_of_birth
     * @property Show\Field|Collection marital_status
     * @property Show\Field|Collection religion_id
     * @property Show\Field|Collection blood_group
     * @property Show\Field|Collection citizenship_id
     * @property Show\Field|Collection bio
     * @property Show\Field|Collection experience
     * @property Show\Field|Collection fb_profile
     * @property Show\Field|Collection twitter_profile
     * @property Show\Field|Collection gplus_profile
     * @property Show\Field|Collection linkedin_profile
     * @property Show\Field|Collection account_title
     * @property Show\Field|Collection account_number
     * @property Show\Field|Collection bank_name
     * @property Show\Field|Collection iban
     * @property Show\Field|Collection swift_code
     * @property Show\Field|Collection bank_branch
     * @property Show\Field|Collection contact_full_name
     * @property Show\Field|Collection contact_phone_no
     * @property Show\Field|Collection contact_email
     * @property Show\Field|Collection contact_address
     * @property Show\Field|Collection event_title
     * @property Show\Field|Collection event_date
     * @property Show\Field|Collection event_time
     * @property Show\Field|Collection event_note
     * @property Show\Field|Collection event_color
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection account_name
     * @property Show\Field|Collection account_balance
     * @property Show\Field|Collection account_opening_balance
     * @property Show\Field|Collection branch_code
     * @property Show\Field|Collection account_id
     * @property Show\Field|Collection staff_id
     * @property Show\Field|Collection transaction_date
     * @property Show\Field|Collection transaction_type
     * @property Show\Field|Collection entity_id
     * @property Show\Field|Collection entity_type
     * @property Show\Field|Collection entity_category_id
     * @property Show\Field|Collection amount
     * @property Show\Field|Collection dr_cr
     * @property Show\Field|Collection payment_method_id
     * @property Show\Field|Collection reference
     * @property Show\Field|Collection attachment_file
     * @property Show\Field|Collection event_name
     * @property Show\Field|Collection is_published
     * @property Show\Field|Collection client_id
     * @property Show\Field|Collection project_id
     * @property Show\Field|Collection invoice_month
     * @property Show\Field|Collection invoice_date
     * @property Show\Field|Collection invoice_due_date
     * @property Show\Field|Collection sub_total_amount
     * @property Show\Field|Collection discount_type
     * @property Show\Field|Collection discount_figure
     * @property Show\Field|Collection total_tax
     * @property Show\Field|Collection tax_type
     * @property Show\Field|Collection total_discount
     * @property Show\Field|Collection grand_total
     * @property Show\Field|Collection invoice_note
     * @property Show\Field|Collection payment_method
     * @property Show\Field|Collection invoice_id
     * @property Show\Field|Collection item_name
     * @property Show\Field|Collection item_qty
     * @property Show\Field|Collection item_unit_price
     * @property Show\Field|Collection item_sub_total
     * @property Show\Field|Collection language_name
     * @property Show\Field|Collection language_code
     * @property Show\Field|Collection language_flag
     * @property Show\Field|Collection leave_type_id
     * @property Show\Field|Collection from_date
     * @property Show\Field|Collection to_date
     * @property Show\Field|Collection reason
     * @property Show\Field|Collection remarks
     * @property Show\Field|Collection is_half_day
     * @property Show\Field|Collection leave_attachment
     * @property Show\Field|Collection shift_name
     * @property Show\Field|Collection monday_in_time
     * @property Show\Field|Collection monday_out_time
     * @property Show\Field|Collection tuesday_in_time
     * @property Show\Field|Collection tuesday_out_time
     * @property Show\Field|Collection wednesday_in_time
     * @property Show\Field|Collection wednesday_out_time
     * @property Show\Field|Collection thursday_in_time
     * @property Show\Field|Collection thursday_out_time
     * @property Show\Field|Collection friday_in_time
     * @property Show\Field|Collection friday_out_time
     * @property Show\Field|Collection saturday_in_time
     * @property Show\Field|Collection saturday_out_time
     * @property Show\Field|Collection sunday_in_time
     * @property Show\Field|Collection sunday_out_time
     * @property Show\Field|Collection token
     * @property Show\Field|Collection payslip_key
     * @property Show\Field|Collection salary_month
     * @property Show\Field|Collection wages_type
     * @property Show\Field|Collection payslip_type
     * @property Show\Field|Collection daily_wages
     * @property Show\Field|Collection hours_worked
     * @property Show\Field|Collection total_allowances
     * @property Show\Field|Collection total_commissions
     * @property Show\Field|Collection total_statutory_deductions
     * @property Show\Field|Collection total_other_payments
     * @property Show\Field|Collection net_salary
     * @property Show\Field|Collection pay_comments
     * @property Show\Field|Collection is_payment
     * @property Show\Field|Collection year_to_date
     * @property Show\Field|Collection is_advance_salary_deduct
     * @property Show\Field|Collection advance_salary_amount
     * @property Show\Field|Collection is_loan_deduct
     * @property Show\Field|Collection loan_amount
     * @property Show\Field|Collection payslip_id
     * @property Show\Field|Collection is_taxable
     * @property Show\Field|Collection pay_title
     * @property Show\Field|Collection pay_amount
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection attachment
     * @property Show\Field|Collection role_name
     * @property Show\Field|Collection role_access
     * @property Show\Field|Collection role_resources
     * @property Show\Field|Collection attendance_date
     * @property Show\Field|Collection clock_in
     * @property Show\Field|Collection clock_in_ip_address
     * @property Show\Field|Collection clock_out
     * @property Show\Field|Collection clock_out_ip_address
     * @property Show\Field|Collection clock_in_out
     * @property Show\Field|Collection clock_in_latitude
     * @property Show\Field|Collection clock_in_longitude
     * @property Show\Field|Collection clock_out_latitude
     * @property Show\Field|Collection clock_out_longitude
     * @property Show\Field|Collection time_late
     * @property Show\Field|Collection early_leaving
     * @property Show\Field|Collection overtime
     * @property Show\Field|Collection total_work
     * @property Show\Field|Collection total_rest
     * @property Show\Field|Collection attendance_status
     * @property Show\Field|Collection request_date
     * @property Show\Field|Collection request_month
     * @property Show\Field|Collection total_hours
     * @property Show\Field|Collection request_reason
     * @property Show\Field|Collection is_approved
     * @property Show\Field|Collection email_verified_at
     *
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection alias(string $label = null)
     * @method Show\Field|Collection authors(string $label = null)
     * @method Show\Field|Collection enable(string $label = null)
     * @method Show\Field|Collection imported(string $label = null)
     * @method Show\Field|Collection config(string $label = null)
     * @method Show\Field|Collection require(string $label = null)
     * @method Show\Field|Collection require_dev(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection method(string $label = null)
     * @method Show\Field|Collection ip(string $label = null)
     * @method Show\Field|Collection input(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection company_id(string $label = null)
     * @method Show\Field|Collection department_id(string $label = null)
     * @method Show\Field|Collection start_date(string $label = null)
     * @method Show\Field|Collection end_date(string $label = null)
     * @method Show\Field|Collection published_by(string $label = null)
     * @method Show\Field|Collection summary(string $label = null)
     * @method Show\Field|Collection is_active(string $label = null)
     * @method Show\Field|Collection assets_category_id(string $label = null)
     * @method Show\Field|Collection brand_id(string $label = null)
     * @method Show\Field|Collection employee_id(string $label = null)
     * @method Show\Field|Collection company_asset_code(string $label = null)
     * @method Show\Field|Collection purchase_date(string $label = null)
     * @method Show\Field|Collection invoice_number(string $label = null)
     * @method Show\Field|Collection manufacturer(string $label = null)
     * @method Show\Field|Collection serial_number(string $label = null)
     * @method Show\Field|Collection warranty_end_date(string $label = null)
     * @method Show\Field|Collection asset_note(string $label = null)
     * @method Show\Field|Collection asset_image(string $label = null)
     * @method Show\Field|Collection is_working(string $label = null)
     * @method Show\Field|Collection salary_type(string $label = null)
     * @method Show\Field|Collection contract_tax_option(string $label = null)
     * @method Show\Field|Collection is_fixed(string $label = null)
     * @method Show\Field|Collection option_title(string $label = null)
     * @method Show\Field|Collection contract_amount(string $label = null)
     * @method Show\Field|Collection department_name(string $label = null)
     * @method Show\Field|Collection department_head(string $label = null)
     * @method Show\Field|Collection added_by(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection designation_name(string $label = null)
     * @method Show\Field|Collection template_code(string $label = null)
     * @method Show\Field|Collection template_type(string $label = null)
     * @method Show\Field|Collection subject(string $label = null)
     * @method Show\Field|Collection message(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection category_name(string $label = null)
     * @method Show\Field|Collection field_one(string $label = null)
     * @method Show\Field|Collection field_two(string $label = null)
     * @method Show\Field|Collection application_name(string $label = null)
     * @method Show\Field|Collection company_name(string $label = null)
     * @method Show\Field|Collection trading_name(string $label = null)
     * @method Show\Field|Collection registration_no(string $label = null)
     * @method Show\Field|Collection government_tax(string $label = null)
     * @method Show\Field|Collection company_type_id(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection contact_number(string $label = null)
     * @method Show\Field|Collection country(string $label = null)
     * @method Show\Field|Collection address_1(string $label = null)
     * @method Show\Field|Collection address_2(string $label = null)
     * @method Show\Field|Collection city(string $label = null)
     * @method Show\Field|Collection zipcode(string $label = null)
     * @method Show\Field|Collection state(string $label = null)
     * @method Show\Field|Collection default_currency(string $label = null)
     * @method Show\Field|Collection is_ssl_available(string $label = null)
     * @method Show\Field|Collection currency_converter(string $label = null)
     * @method Show\Field|Collection notification_position(string $label = null)
     * @method Show\Field|Collection notification_close_btn(string $label = null)
     * @method Show\Field|Collection notification_bar(string $label = null)
     * @method Show\Field|Collection date_format_xi(string $label = null)
     * @method Show\Field|Collection enable_email_notification(string $label = null)
     * @method Show\Field|Collection email_type(string $label = null)
     * @method Show\Field|Collection logo(string $label = null)
     * @method Show\Field|Collection favicon(string $label = null)
     * @method Show\Field|Collection frontend_logo(string $label = null)
     * @method Show\Field|Collection other_logo(string $label = null)
     * @method Show\Field|Collection animation_effect(string $label = null)
     * @method Show\Field|Collection animation_effect_modal(string $label = null)
     * @method Show\Field|Collection animation_effect_topmenu(string $label = null)
     * @method Show\Field|Collection default_language(string $label = null)
     * @method Show\Field|Collection system_timezone(string $label = null)
     * @method Show\Field|Collection paypal_email(string $label = null)
     * @method Show\Field|Collection paypal_sandbox(string $label = null)
     * @method Show\Field|Collection paypal_active(string $label = null)
     * @method Show\Field|Collection stripe_secret_key(string $label = null)
     * @method Show\Field|Collection stripe_publishable_key(string $label = null)
     * @method Show\Field|Collection stripe_active(string $label = null)
     * @method Show\Field|Collection online_payment_account(string $label = null)
     * @method Show\Field|Collection invoice_terms_condition(string $label = null)
     * @method Show\Field|Collection auth_background(string $label = null)
     * @method Show\Field|Collection hr_version(string $label = null)
     * @method Show\Field|Collection hr_release_date(string $label = null)
     * @method Show\Field|Collection user_role_id(string $label = null)
     * @method Show\Field|Collection user_type(staff)(string $label = null)
     * @method Show\Field|Collection first_name(string $label = null)
     * @method Show\Field|Collection last_name(string $label = null)
     * @method Show\Field|Collection profile_photo(string $label = null)
     * @method Show\Field|Collection gender(string $label = null)
     * @method Show\Field|Collection last_login_date(string $label = null)
     * @method Show\Field|Collection last_logout_date(string $label = null)
     * @method Show\Field|Collection last_login_ip(string $label = null)
     * @method Show\Field|Collection is_logged_in(string $label = null)
     * @method Show\Field|Collection designation_id(string $label = null)
     * @method Show\Field|Collection office_shift_id(string $label = null)
     * @method Show\Field|Collection basic_salary(string $label = null)
     * @method Show\Field|Collection hourly_rate(string $label = null)
     * @method Show\Field|Collection role_description(string $label = null)
     * @method Show\Field|Collection date_of_joining(string $label = null)
     * @method Show\Field|Collection date_of_leaving(string $label = null)
     * @method Show\Field|Collection date_of_birth(string $label = null)
     * @method Show\Field|Collection marital_status(string $label = null)
     * @method Show\Field|Collection religion_id(string $label = null)
     * @method Show\Field|Collection blood_group(string $label = null)
     * @method Show\Field|Collection citizenship_id(string $label = null)
     * @method Show\Field|Collection bio(string $label = null)
     * @method Show\Field|Collection experience(string $label = null)
     * @method Show\Field|Collection fb_profile(string $label = null)
     * @method Show\Field|Collection twitter_profile(string $label = null)
     * @method Show\Field|Collection gplus_profile(string $label = null)
     * @method Show\Field|Collection linkedin_profile(string $label = null)
     * @method Show\Field|Collection account_title(string $label = null)
     * @method Show\Field|Collection account_number(string $label = null)
     * @method Show\Field|Collection bank_name(string $label = null)
     * @method Show\Field|Collection iban(string $label = null)
     * @method Show\Field|Collection swift_code(string $label = null)
     * @method Show\Field|Collection bank_branch(string $label = null)
     * @method Show\Field|Collection contact_full_name(string $label = null)
     * @method Show\Field|Collection contact_phone_no(string $label = null)
     * @method Show\Field|Collection contact_email(string $label = null)
     * @method Show\Field|Collection contact_address(string $label = null)
     * @method Show\Field|Collection event_title(string $label = null)
     * @method Show\Field|Collection event_date(string $label = null)
     * @method Show\Field|Collection event_time(string $label = null)
     * @method Show\Field|Collection event_note(string $label = null)
     * @method Show\Field|Collection event_color(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection account_name(string $label = null)
     * @method Show\Field|Collection account_balance(string $label = null)
     * @method Show\Field|Collection account_opening_balance(string $label = null)
     * @method Show\Field|Collection branch_code(string $label = null)
     * @method Show\Field|Collection account_id(string $label = null)
     * @method Show\Field|Collection staff_id(string $label = null)
     * @method Show\Field|Collection transaction_date(string $label = null)
     * @method Show\Field|Collection transaction_type(string $label = null)
     * @method Show\Field|Collection entity_id(string $label = null)
     * @method Show\Field|Collection entity_type(string $label = null)
     * @method Show\Field|Collection entity_category_id(string $label = null)
     * @method Show\Field|Collection amount(string $label = null)
     * @method Show\Field|Collection dr_cr(string $label = null)
     * @method Show\Field|Collection payment_method_id(string $label = null)
     * @method Show\Field|Collection reference(string $label = null)
     * @method Show\Field|Collection attachment_file(string $label = null)
     * @method Show\Field|Collection event_name(string $label = null)
     * @method Show\Field|Collection is_published(string $label = null)
     * @method Show\Field|Collection client_id(string $label = null)
     * @method Show\Field|Collection project_id(string $label = null)
     * @method Show\Field|Collection invoice_month(string $label = null)
     * @method Show\Field|Collection invoice_date(string $label = null)
     * @method Show\Field|Collection invoice_due_date(string $label = null)
     * @method Show\Field|Collection sub_total_amount(string $label = null)
     * @method Show\Field|Collection discount_type(string $label = null)
     * @method Show\Field|Collection discount_figure(string $label = null)
     * @method Show\Field|Collection total_tax(string $label = null)
     * @method Show\Field|Collection tax_type(string $label = null)
     * @method Show\Field|Collection total_discount(string $label = null)
     * @method Show\Field|Collection grand_total(string $label = null)
     * @method Show\Field|Collection invoice_note(string $label = null)
     * @method Show\Field|Collection payment_method(string $label = null)
     * @method Show\Field|Collection invoice_id(string $label = null)
     * @method Show\Field|Collection item_name(string $label = null)
     * @method Show\Field|Collection item_qty(string $label = null)
     * @method Show\Field|Collection item_unit_price(string $label = null)
     * @method Show\Field|Collection item_sub_total(string $label = null)
     * @method Show\Field|Collection language_name(string $label = null)
     * @method Show\Field|Collection language_code(string $label = null)
     * @method Show\Field|Collection language_flag(string $label = null)
     * @method Show\Field|Collection leave_type_id(string $label = null)
     * @method Show\Field|Collection from_date(string $label = null)
     * @method Show\Field|Collection to_date(string $label = null)
     * @method Show\Field|Collection reason(string $label = null)
     * @method Show\Field|Collection remarks(string $label = null)
     * @method Show\Field|Collection is_half_day(string $label = null)
     * @method Show\Field|Collection leave_attachment(string $label = null)
     * @method Show\Field|Collection shift_name(string $label = null)
     * @method Show\Field|Collection monday_in_time(string $label = null)
     * @method Show\Field|Collection monday_out_time(string $label = null)
     * @method Show\Field|Collection tuesday_in_time(string $label = null)
     * @method Show\Field|Collection tuesday_out_time(string $label = null)
     * @method Show\Field|Collection wednesday_in_time(string $label = null)
     * @method Show\Field|Collection wednesday_out_time(string $label = null)
     * @method Show\Field|Collection thursday_in_time(string $label = null)
     * @method Show\Field|Collection thursday_out_time(string $label = null)
     * @method Show\Field|Collection friday_in_time(string $label = null)
     * @method Show\Field|Collection friday_out_time(string $label = null)
     * @method Show\Field|Collection saturday_in_time(string $label = null)
     * @method Show\Field|Collection saturday_out_time(string $label = null)
     * @method Show\Field|Collection sunday_in_time(string $label = null)
     * @method Show\Field|Collection sunday_out_time(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection payslip_key(string $label = null)
     * @method Show\Field|Collection salary_month(string $label = null)
     * @method Show\Field|Collection wages_type(string $label = null)
     * @method Show\Field|Collection payslip_type(string $label = null)
     * @method Show\Field|Collection daily_wages(string $label = null)
     * @method Show\Field|Collection hours_worked(string $label = null)
     * @method Show\Field|Collection total_allowances(string $label = null)
     * @method Show\Field|Collection total_commissions(string $label = null)
     * @method Show\Field|Collection total_statutory_deductions(string $label = null)
     * @method Show\Field|Collection total_other_payments(string $label = null)
     * @method Show\Field|Collection net_salary(string $label = null)
     * @method Show\Field|Collection pay_comments(string $label = null)
     * @method Show\Field|Collection is_payment(string $label = null)
     * @method Show\Field|Collection year_to_date(string $label = null)
     * @method Show\Field|Collection is_advance_salary_deduct(string $label = null)
     * @method Show\Field|Collection advance_salary_amount(string $label = null)
     * @method Show\Field|Collection is_loan_deduct(string $label = null)
     * @method Show\Field|Collection loan_amount(string $label = null)
     * @method Show\Field|Collection payslip_id(string $label = null)
     * @method Show\Field|Collection is_taxable(string $label = null)
     * @method Show\Field|Collection pay_title(string $label = null)
     * @method Show\Field|Collection pay_amount(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection attachment(string $label = null)
     * @method Show\Field|Collection role_name(string $label = null)
     * @method Show\Field|Collection role_access(string $label = null)
     * @method Show\Field|Collection role_resources(string $label = null)
     * @method Show\Field|Collection attendance_date(string $label = null)
     * @method Show\Field|Collection clock_in(string $label = null)
     * @method Show\Field|Collection clock_in_ip_address(string $label = null)
     * @method Show\Field|Collection clock_out(string $label = null)
     * @method Show\Field|Collection clock_out_ip_address(string $label = null)
     * @method Show\Field|Collection clock_in_out(string $label = null)
     * @method Show\Field|Collection clock_in_latitude(string $label = null)
     * @method Show\Field|Collection clock_in_longitude(string $label = null)
     * @method Show\Field|Collection clock_out_latitude(string $label = null)
     * @method Show\Field|Collection clock_out_longitude(string $label = null)
     * @method Show\Field|Collection time_late(string $label = null)
     * @method Show\Field|Collection early_leaving(string $label = null)
     * @method Show\Field|Collection overtime(string $label = null)
     * @method Show\Field|Collection total_work(string $label = null)
     * @method Show\Field|Collection total_rest(string $label = null)
     * @method Show\Field|Collection attendance_status(string $label = null)
     * @method Show\Field|Collection request_date(string $label = null)
     * @method Show\Field|Collection request_month(string $label = null)
     * @method Show\Field|Collection total_hours(string $label = null)
     * @method Show\Field|Collection request_reason(string $label = null)
     * @method Show\Field|Collection is_approved(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
