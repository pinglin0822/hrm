<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class PayslipAllowance extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'payslip_allowances';
    
    public function payslip()
    {
        return $this->belongsTo(Payslip::class,'payslip_id','id');
    }
}
