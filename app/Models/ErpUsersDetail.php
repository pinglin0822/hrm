<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class ErpUsersDetail extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'erp_users_details';
    
    public function erpUser()
    {
        return $this->belongsTo(ErpUser::class,'user_id','id');
    }
}
