<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class PayslipCommission extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'payslip_commissions';

    public function payslip()
    {
        return $this->belongsTo(Payslip::class,'payslip_id','id');
    }
    
}
