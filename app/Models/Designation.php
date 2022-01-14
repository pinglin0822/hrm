<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
	use HasDateTimeFormatter;   
	
	public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }
}
