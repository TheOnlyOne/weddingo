<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierSocialLink extends Model
{
    protected $table = 'supplier_social_links';
    public $timestamps = false;
    protected $fillable = [
        'supplier_id', 'provider', 'url',
    ];

    public function Supplier()
    {
        return $this->belongsTo('App\Supplier', 'supplier_id', 'id');
    }
}
