<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    public $timestamps = false;
    protected $fillable = [
        'name', 'area_id',
    ];

    public function Suppliers()
    {
        return $this->hasMany('App\Supplier', 'city_id', 'id');
    }

    public function Area()
    {
        return $this->belongsTo('App\Area', 'area_id', 'id');
    }
}
