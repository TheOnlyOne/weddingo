<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateElements extends Model
{
    protected $table = "templates_elements";
    protected $fillable = ["name"];
}
