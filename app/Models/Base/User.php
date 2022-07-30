<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Permission;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * 
 * @property int $id
 * @property character varying $name
 * @property character varying $email
 * @property timestamp without time zone|null $email_verified_at
 * @property character varying $password
 * @property character varying|null $photo
 * @property bool $active
 * @property bool $admin
 * @property bool $shop_admin
 * @property int|null $shops_id
 * @property character varying|null $remember_token
 * @property timestamp without time zone|null $created_at
 * @property timestamp without time zone|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Shop|null $shop
 * @property Collection|Permission[] $permissions
 *
 * @package App\Models\Base
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'users';

	protected $casts = [
		'name' => 'character varying',
		'email' => 'character varying',
		'email_verified_at' => 'timestamp without time zone',
		'password' => 'character varying',
		'photo' => 'character varying',
		'active' => 'bool',
		'admin' => 'bool',
		'shop_admin' => 'bool',
		'shops_id' => 'int',
		'remember_token' => 'character varying',
		'created_at' => 'timestamp without time zone',
		'updated_at' => 'timestamp without time zone'
	];

	public function shop()
	{
		return $this->belongsTo(Shop::class, 'shops_id');
	}

	public function permissions()
	{
		return $this->hasMany(Permission::class, 'users_id');
	}
}
