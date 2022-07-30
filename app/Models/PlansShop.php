<?php

namespace App\Models;

use App\Models\Base\PlansShop as BasePlansShop;

class PlansShop extends BasePlansShop
{
	protected $fillable = [
		'plans_id',
		'shops_id',
		'qtd_pets',
		'subscription',
		'expires_at',
		'subscription_id',
		'subscription_active',
		'subscription_suspended'
	];

	protected $casts = [];
}
