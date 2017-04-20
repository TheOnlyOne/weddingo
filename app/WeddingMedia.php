<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeddingMedia extends Model
{
    protected $table = 'wedding_media';
    public $timestamps = false;
    protected $fillable = [
        'wedding_id', 'media_title_id', 'mime', 'size','type','image_name','video_name','image_url','video_url'
    ];

    public function weddingMediaTitle()
    {
        return $this->belongsTo('App\WeddingMediaTitle', 'media_title_id', 'id');
    }
}
