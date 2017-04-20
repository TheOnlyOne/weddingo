<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskToWedding extends Model
{
    protected $table = 'tasks_to_weddings';
    public $timestamps = false;
    protected $fillable = [
        'wedding_id', 'task_id', 'exec', 'comment', 'place', 'is_deleted'
    ];

    public function Wedding()
    {
        return $this->belongsTo('App\Wedding', 'wedding_id', 'id');
    }
    public function Task()
    {
        return $this->belongsTo('App\Task', 'task_id', 'id');
    }
}
