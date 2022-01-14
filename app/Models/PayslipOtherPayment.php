<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class PayslipOtherPayment extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'payslip_other_payments';
    
    public function payslip()
    {
        return $this->belongsTo(Payslip::class,'payslip_id','id');
    }
}
