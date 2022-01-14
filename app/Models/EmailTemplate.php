<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'email_template';
    
}
