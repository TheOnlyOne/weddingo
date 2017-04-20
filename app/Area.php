<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function Cities()
    {
        return $this->hasMany('App\City', 'area_id', 'id');
    }
}
