<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FinanceAccount extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'finance_accounts';
    
    public function financeTransaction()
    {
        return $this->hasMany(FinanceTransaction::class,'account_id','id');
    }
}
