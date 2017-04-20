<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeddingTemplate extends Model
{
    protected $table = 'wedding_templates';
    protected $fillable = [
        'name', 'public_source',
    ];
}
