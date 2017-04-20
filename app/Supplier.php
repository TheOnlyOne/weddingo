<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    public $timestamps = false;
    protected $fillable = [
        'supplier_type', 'name', 'city_id', 'street', 'desc', 'logo_id', 'theme_id'
    ];

    public function weddings()
    {
        return $this->hasMany('App\Wedding', 'wedding_hall', 'id');
    }

    public function SocialLinks()
    {
        return $this->hasMany('App\SupplierSocialLink', 'supplier_id', 'id');
    }

    public function SupplierType()
    {
        return $this->belongsTo('App\SupplierType', 'supplier_type', 'id');
    }

    public function City()
    {
        return $this->belongsTo('App\City', 'city_id', 'id');
    }

    public function Logo()
    {
        return $this->belongsTo('App\SupplierMedia', 'logo_id', 'id');
    }

    public function Theme()
    {
        return $this->belongsTo('App\SupplierMedia', 'theme_id', 'id');
    }

    public function Media()
    {
        return $this->hasMany('App\SupplierMedia', 'supplier_id', 'id');
    }
}
