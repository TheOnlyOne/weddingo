<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierType extends Model
{
    protected $table = 'supplier_types';
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function Suppliers()
    {
        return $this->hasMany('App\Supplier', 'supplier_type', 'id');
    }
}
