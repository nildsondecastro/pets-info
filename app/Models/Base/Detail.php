<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Detail
 * 
 * @property int $details_id
 * @property character varying $name
 * @property int $plans_id
 * @property timestamp without time zone|null $created_at
 * @property timestamp without time zone|null $updated_at
 * 
 * @property Plan $plan
 *
 * @package App\Models\Base
 */
class Detail extends Model
{
	protected $table = 'details';
	protected $primaryKey = 'details_id';

	protected $casts = [
		'name' => 'character varying',
		'plans_id' => 'int',
		'created_at' => 'timestamp without time zone',
		'updated_at' => 'timestamp without time zone'
	];

	public function plan()
	{
		return $this->belongsTo(Plan::class, 'plans_id');
	}
}
