<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class StaffRole extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'staff_roles';
    
}
