<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Builder, Model};
use Illuminate\Database\Eloquent\Factories\HasFactory;

/** @mixin Builder */
class UserMetadata extends Model
{
    use HasFactory;

    protected $table = 'user_metadata'; //TODO: add table to DB 'user_metadata'

	protected $fillable = [
		'user_id',
		'uri',
		'ip_address'
	];
}
