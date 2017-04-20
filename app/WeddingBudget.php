<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeddingBudget extends Model
{
    protected $table = 'wedding_budget';
    public $timestamps = false;
    protected $fillable = [
        'wedding_id', 'budget_type_id', 'supplier_name', 'price', 'paid', 'comment',
    ];

    public function Wedding()
    {
        return $this->belongsTo('App\Wedding', 'wedding_id', 'id');
    }

    public function BudgetType()
    {
        return $this->belongsTo('App\BudgetType', 'budget_type_id', 'id');
    }

    public static function DeleteById($id)
    {
        WeddingBudget::where('id', $id)->delete();
    }

    public static function SumPrice($WeddingId)
    {
        return WeddingBudget::where('wedding_id', $WeddingId)->sum('price');
    }
}
