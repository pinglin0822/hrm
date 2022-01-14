<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    public function designation()
    {
        return $this->hasOne(Designation::class,'department_id','id');
    }

    public function announcement()
    {
        return $this->hasOne(Announcement::class,'department_id','id');
    }

}
