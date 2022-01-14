<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class FinanceTransaction extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'finance_transactions';
    
    public function financeAccount()
    {
        return $this->belongsTo(FinanceAccount::class,'account_id','id');
    }
}
