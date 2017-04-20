<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierMediaTitle extends Model
{
    protected $table = 'supplier_media_titles';
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function Media()
    {
        return $this->hasMany('App\SupplierMedia', 'media_title_id', 'id');
    }
}
