<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 * 
 * @property int $permissions_id
 * @property bool $cruds
 * @property bool $prices
 * @property bool $sales
 * @property int $users_id
 * @property timestamp without time zone|null $created_at
 * @property timestamp without time zone|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models\Base
 */
class Permission extends Model
{
	protected $table = 'permissions';
	protected $primaryKey = 'permissions_id';

	protected $casts = [
		'cruds' => 'bool',
		'prices' => 'bool',
		'sales' => 'bool',
		'users_id' => 'int',
		'created_at' => 'timestamp without time zone',
		'updated_at' => 'timestamp without time zone'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}
}
