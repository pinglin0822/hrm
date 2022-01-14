<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    public function payslipAllowance()
    {
        return $this->hasOne(PayslipAllowance::class,'payslip_id','id');
    }

    public function payslipCommission()
    {
        return $this->hasOne(PayslipCommission::class,'payslip_id','id');
    }

    public function payslipOtherPayment()
    {
        return $this->hasOne(PayslipOtherPayment::class,'payslip_id','id');
    }

    public function payslipStatutoryDeduction()
    {
        return $this->hasOne(PayslipStatutoryDeduction::class,'payslip_id','id');
    }
}
