<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //relationship
	public function comments()
	{
		return $this->hasOne(Task::class);
	}
}
