<?php

namespace App\Models;

use App\Models\Base\Detail as BaseDetail;

class Detail extends BaseDetail
{
	protected $fillable = [
		'name',
		'plans_id'
	];

	protected $casts = [];
}
