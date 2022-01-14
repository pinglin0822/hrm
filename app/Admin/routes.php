<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('users', 'UserController');
    
    //personnel module
    $router->resource('erpUsers','ErpUserController');
    $router->resource('contractOption','ContractOptionController');
    $router->resource('erpUsersDetail','ErpUsersDetailController');

    //setting module
    $router->resource('erpConstant','ErpConstantController');
    $router->resource('department','DepartmentController');
    $router->resource('designation','DesignationController');
    $router->resource('asset','AssetController');
    $router->resource('staffRole','StaffRoleController');
    $router->resource('announcement','AnnouncementController');
    $router->resource('policy','PolicyController');

    //attendance module
    $router->resource('leaveApplication','LeaveApplicationController');
    $router->resource('holiday','HolidayController');
    $router->resource('officeShift','OfficeShiftController');
    $router->resource('timesheet','TimesheetController');
    $router->resource('timesheetRequest','TimesheetRequestController');
    $router->resource('event','EventController');

    //salary module
    $router->resource('payslip','PayslipController');
    $router->resource('payslipAllowance','PayslipAllowanceController');
    $router->resource('payslipCommission','PayslipCommissionController');
    $router->resource('payslipOtherPayment','PayslipOtherPaymentController');
    $router->resource('payslipStatutoryDeduction','PayslipStatutoryDeductionController');

    //invoice module
    $router->resource('invoice','InvoiceController');
    $router->resource('invoicesItem','InvoicesItemController');

    //finance module
    $router->resource('financeAccount','FinanceAccountController');
    $router->resource('financeTransaction','FinanceTransactionController');

    //others
    $router->resource('erpSetting','ErpSettingController');
    $router->resource('emailTemplate','EmailTemplateController');
    $router->resource('language','LanguageController');
});

