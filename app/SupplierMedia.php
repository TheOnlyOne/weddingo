<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierMedia extends Model
{
    protected $table = 'supplier_media';
    public $timestamps = false;
    protected $fillable = [
        'supplier_id', 'media_title_id', 'mime', 'size','type','image_name','image_url',
    ];

    public function Media_title()
    {
        return $this->belongsTo('App\SupplierMediaTitle', 'media_title_id', 'id');
    }

    public function Supplier()
    {
        return $this->belongsTo('App\Supplier', 'supplier_id', 'id');
    }
}
