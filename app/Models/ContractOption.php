<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class ContractOption extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'contract_options';
    
    public function erpUser()
    {
        return $this->belongsTo(ErpUser::class,'user_id','id');
    }
}
