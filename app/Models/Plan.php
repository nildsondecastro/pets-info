<?php

namespace App\Models;

use App\Models\Base\Plan as BasePlan;

class Plan extends BasePlan
{
	protected $fillable = [
		'name',
		'icon',
		'url',
		'active',
		'price'
	];

	protected $casts = [];
}
