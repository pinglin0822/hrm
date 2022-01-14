<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class OfficeShift extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'office_shifts';
    
}
