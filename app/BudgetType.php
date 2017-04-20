<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BudgetType extends Model
{
    protected $table = 'budget_types';
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function WeddingBudget()
    {
        return $this->hasMany('App\WeddingBudget', 'budget_type_id', 'id');
    }
}
