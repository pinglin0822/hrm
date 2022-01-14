<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class PayslipStatutoryDeduction extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'payslip_statutory_deductions';
    
    public function payslip()
    {
        return $this->belongsTo(Payslip::class,'payslip_id','id');
    }
}
