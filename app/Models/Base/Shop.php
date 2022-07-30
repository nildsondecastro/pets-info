<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Shop
 * 
 * @property int $shops_id
 * @property character varying $name
 * @property character varying $url
 * @property character varying|null $cnpj
 * @property string $description
 * @property string|null $address
 * @property character varying|null $telefone
 * @property character varying|null $email
 * @property character varying|null $whatsapp
 * @property character varying|null $whatsapp_link
 * @property character varying|null $instagram_link
 * @property character varying|null $facebook_link
 * @property bool $active
 * @property timestamp without time zone|null $created_at
 * @property timestamp without time zone|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Plan[] $plans
 * @property Collection|User[] $users
 *
 * @package App\Models\Base
 */
class Shop extends Model
{
	use SoftDeletes;
	protected $table = 'shops';
	protected $primaryKey = 'shops_id';

	protected $casts = [
		'name' => 'character varying',
		'url' => 'character varying',
		'cnpj' => 'character varying',
		'telefone' => 'character varying',
		'email' => 'character varying',
		'whatsapp' => 'character varying',
		'whatsapp_link' => 'character varying',
		'instagram_link' => 'character varying',
		'facebook_link' => 'character varying',
		'active' => 'bool',
		'created_at' => 'timestamp without time zone',
		'updated_at' => 'timestamp without time zone'
	];

	public function plans()
	{
		return $this->belongsToMany(Plan::class, 'plans_shops', 'shops_id', 'plans_id')
					->withPivot('plans_shops_id', 'subscription', 'expires_at', 'subscription_id', 'subscription_active', 'subscription_suspended', 'deleted_at')
					->withTimestamps();
	}

	public function users()
	{
		return $this->hasMany(User::class, 'shops_id');
	}
}
