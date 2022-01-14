<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class InvoicesItem extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'invoices_items';
    
    public function invoice()
    {
        return $this->belongsTo(Invoice::class,'invoice_id','id');
    }
}
