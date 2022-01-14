<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class TimesheetRequest extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'timesheet_request';
    
}
