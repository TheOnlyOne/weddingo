<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeddingMediaTitle extends Model
{
    protected $table = 'wedding_media_titles';
    public $timestamps = false;
    protected $fillable = [
        'wedding_id', 'title'
    ];

    public static function findByWeddingId($weddingId)
    {
        return WeddingMediaTitle::where('wedding_id', $weddingId)->get();
    }
}
