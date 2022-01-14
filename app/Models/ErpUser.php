<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class ErpUser extends Model
{
	use HasDateTimeFormatter,SoftDeletes;
    protected $table = 'erp_users';
    
    public function contractOption()
    {
        return $this->hasOne(ContractOption::class,'user_id','id');
    }

    public function erpUsersDetail()
    {
        return $this->hasOne(ErpUsersDetail::class,'user_id','id');
    }
}
