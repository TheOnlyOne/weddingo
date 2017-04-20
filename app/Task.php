<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks_list';
    public $timestamps = false;
    protected $fillable = [
        'name', 'place',
    ];

    public function TasksToWedding()
    {
        return $this->hasMany('App\TaskToWedding', 'task_id', 'id');
    }
}
