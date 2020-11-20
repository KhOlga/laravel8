<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Builder, Model};

/** @mixin Builder */
class TaskStatus extends Model
{
    use HasFactory;

    public $table = 'statuses';

    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'slug', 'name'
    ];
}
