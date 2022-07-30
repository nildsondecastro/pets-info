<?php

namespace App\Models;

use App\Models\Base\User as BaseUser;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'photo',
		'active',
		'admin',
		'shops_id',
		'remember_token'
	];

	protected $casts = [];

	protected $rules = [];

	public function shop()
	{
		return $this->belongsTo(Shop::class, 'shops_id');
	}
}
