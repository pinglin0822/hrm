<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class ErpSetting extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'erp_settings';
    
}
