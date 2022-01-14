<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Asset;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class AssetController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Asset(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('assets_category_id');
            $grid->column('brand_id');
            $grid->column('company_id');
            $grid->column('employee_id');
            $grid->column('company_asset_code');
            $grid->column('name');
            $grid->column('purchase_date');
            $grid->column('invoice_number');
            $grid->column('manufacturer');
            $grid->column('serial_number');
            $grid->column('warranty_end_date');
            $grid->column('asset_note');
            $grid->column('asset_image');
            $grid->column('is_working')->display(function ($is_working) {
                return $is_working ? 'true' : 'false';
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
        return Show::make($id, new Asset(), function (Show $show) {
            $show->field('id');
            $show->field('assets_category_id');
            $show->field('brand_id');
            $show->field('company_id');
            $show->field('employee_id');
            $show->field('company_asset_code');
            $show->field('name');
            $show->field('purchase_date');
            $show->field('invoice_number');
            $show->field('manufacturer');
            $show->field('serial_number');
            $show->field('warranty_end_date');
            $show->field('asset_note');
            $show->field('asset_image');
            $show->field('is_working');
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
        return Form::make(new Asset(), function (Form $form) {
            $form->display('id');
            $form->text('assets_category_id');
            $form->text('brand_id');
            $form->text('company_id');
            $form->text('employee_id');
            $form->text('company_asset_code');
            $form->text('name');
            $form->date('purchase_date');
            $form->text('invoice_number');
            $form->text('manufacturer');
            $form->text('serial_number');
            $form->date('warranty_end_date');
            $form->text('asset_note');
            $form->text('asset_image');
            $form->switch('is_working');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
