<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $dates = [
        'deadline',
    ];

    protected $casts = [
        'done' => 'boolean',
    ];

    protected $fillable = [
        'todo',
        'deadline',
        'priority',
        'done',
    ];
}
