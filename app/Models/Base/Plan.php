<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Detail;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Plan
 * 
 * @property int $plans_id
 * @property character varying $name
 * @property character varying|null $icon
 * @property character varying $url
 * @property bool $active
 * @property float $price
 * @property timestamp without time zone|null $created_at
 * @property timestamp without time zone|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Detail[] $details
 * @property Collection|Shop[] $shops
 *
 * @package App\Models\Base
 */
class Plan extends Model
{
	use SoftDeletes;
	protected $table = 'plans';
	protected $primaryKey = 'plans_id';

	protected $casts = [
		'name' => 'character varying',
		'icon' => 'character varying',
		'url' => 'character varying',
		'active' => 'bool',
		'price' => 'float',
		'created_at' => 'timestamp without time zone',
		'updated_at' => 'timestamp without time zone'
	];

	public function details()
	{
		return $this->hasMany(Detail::class, 'plans_id');
	}

	public function shops()
	{
		return $this->belongsToMany(Shop::class, 'plans_shops', 'plans_id', 'shops_id')
					->withPivot('plans_shops_id', 'subscription', 'expires_at', 'subscription_id', 'subscription_active', 'subscription_suspended', 'deleted_at')
					->withTimestamps();
	}
}
