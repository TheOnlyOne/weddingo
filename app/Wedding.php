<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Wedding extends Model
{
    protected $table = 'weddings';
    public $timestamps = false;
    protected $fillable = [
        'groom_name', 'bride_name', 'date', 'wedding_hall', 'template_id',
    ];

    public function weddingHall()
    {
        return $this->belongsTo('App\Suppliers', 'wedding_hall', 'id');
    }

    public function weddingManagers()
    {
        return $this->hasMany('App\WeddingManager');
    }

    public function buyingInvitationsHistory()
    {
        return $this->hasMany('App\BuyingInvitationsHistory', 'wedding_id', 'id');
    }

    public function weddingMedia()
    {
        return $this->hasMany('App\WeddingMedia', 'wedding_id', 'id');
    }

    public function weddingBudget()
    {
        return $this->hasMany('App\WeddingBudget', 'wedding_id', 'id')->orderBy('id', 'ASC');
    }

    public function TasksToWedding()
    {
        return $this->hasMany('App\TaskToWedding', 'wedding_id', 'id')->orderBy('place', 'ASC');;
    }

    public function Presents()
    {
        return $this->hasMany('App\Present', 'wedding_id', 'id');
    }
}
