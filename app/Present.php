<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Present extends Model
{
    protected $table = 'presents';
    public $timestamps = false;
    protected $fillable = [
        'wedding_id', 'from', 'guest_count', 'amount', 'comment',
    ];

    public function Wedding()
    {
        return $this->belongsTo('App\Wedding', 'wedding_id', 'id');
    }
}
