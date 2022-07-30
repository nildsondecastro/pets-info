<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Plan;
use App\Models\Shop;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlansShop
 * 
 * @property int $plans_shops_id
 * @property int $plans_id
 * @property int $shops_id
 * @property Carbon|null $subscription
 * @property Carbon|null $expires_at
 * @property character varying|null $subscription_id
 * @property bool $subscription_active
 * @property bool $subscription_suspended
 * @property timestamp without time zone|null $created_at
 * @property timestamp without time zone|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Plan $plan
 * @property Shop $shop
 *
 * @package App\Models\Base
 */
class PlansShop extends Model
{
	use SoftDeletes;
	protected $table = 'plans_shops';
	protected $primaryKey = 'plans_shops_id';

	protected $casts = [
		'plans_id' => 'int',
		'shops_id' => 'int',
		'subscription_id' => 'character varying',
		'subscription_active' => 'bool',
		'subscription_suspended' => 'bool',
		'created_at' => 'timestamp without time zone',
		'updated_at' => 'timestamp without time zone'
	];

	protected $dates = [
		'subscription',
		'expires_at'
	];

	public function plan()
	{
		return $this->belongsTo(Plan::class, 'plans_id');
	}

	public function shop()
	{
		return $this->belongsTo(Shop::class, 'shops_id');
	}
}
