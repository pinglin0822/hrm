<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'leave_applications';
    
}
