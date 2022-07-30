<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Base\Contact as BaseContact;

/**
 * Class Contact
 *
 * @property $contacts_id
 * @property $active
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 * @property $instagram_link
 * @property $facebook_link
 * @property $address
 * @property $telefone
 * @property $email
 * @property $whatsapp
 * @property $whatsapp_link
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contact extends BaseContact
{
    use SoftDeletes;

    static $rules = [];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
		'contacts_id',
		'active',
		'instagram_link',
		'facebook_link',
		'address',
		'telefone',
		'email',
		'whatsapp',
		'whatsapp_link'
	];

	protected $casts = [];

}
