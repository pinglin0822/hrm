<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    public function invoicesItem()
    {
        return $this->hasMany(InvoicesItem::class,'invoice_id','id');
    }
}
