<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * 
 * @property int $contacts_id
 * @property character varying|null $telefone
 * @property character varying|null $email
 * @property character varying|null $whatsapp
 * @property character varying|null $whatsapp_link
 * @property character varying|null $instagram_link
 * @property character varying|null $facebook_link
 * @property character varying|null $address
 * @property bool $active
 * @property timestamp without time zone|null $created_at
 * @property timestamp without time zone|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models\Base
 */
class Contact extends Model
{
	use SoftDeletes;
	protected $table = 'contacts';
	protected $primaryKey = 'contacts_id';

	protected $casts = [
		'telefone' => 'character varying',
		'email' => 'character varying',
		'whatsapp' => 'character varying',
		'whatsapp_link' => 'character varying',
		'instagram_link' => 'character varying',
		'facebook_link' => 'character varying',
		'address' => 'character varying',
		'active' => 'bool',
		'created_at' => 'timestamp without time zone',
		'updated_at' => 'timestamp without time zone'
	];
}
