<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PasswordReset
 * 
 * @property character varying $email
 * @property character varying $token
 * @property timestamp without time zone|null $created_at
 *
 * @package App\Models\Base
 */
class PasswordReset extends Model
{
	protected $table = 'password_resets';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'email' => 'character varying',
		'token' => 'character varying',
		'created_at' => 'timestamp without time zone'
	];
}
