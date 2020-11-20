<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/** @mixin Builder */
class Task extends Model
{
    use HasFactory;

    public $table = 'tasks';

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'status_id',
        'user_id',
        'created_at',
        'updated_at'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
