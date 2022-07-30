<?php

namespace App\Models;

use App\Models\Base\Permission as BasePermission;

class Permission extends BasePermission
{
	protected $fillable = [
		'cruds',
		'prices',
		'sales',
		'users_id'
	];

	protected $casts = [];
}
