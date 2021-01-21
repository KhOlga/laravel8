<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\{Builder, Model};
use Illuminate\Database\Eloquent\Factories\HasFactory;

/** @mixin Builder */
class Proxy extends Model
{
    use HasFactory;

    protected $table = 'proxies';

    protected $fillable = [
    	'visitor'
	];

	protected function getIpAddresses()
	{
		return Arr::pluck($this->select('visitor')->get(), 'visitor');
	}
}
