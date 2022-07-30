<?php

namespace App\Models;

use App\Models\Base\Shop as BaseShop;

class Shop extends BaseShop
{
	static $rules = [
		'name' => 'required'
	];

    protected $perPage = 20;

	protected $fillable = [
		'name',
		'url',
		'cnpj',
		'description',
		'address',
		'telefone',
		'email',
		'whatsapp',
		'whatsapp_link',
		'instagram_link',
		'facebook_link',
		'active'
	];

	protected $casts = [];
}
