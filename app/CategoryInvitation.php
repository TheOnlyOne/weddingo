<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryInvitation extends Model
{
    protected $table = "category_invitation";
    public $timestamps = false;
    protected $fillable = ["name"];
}
