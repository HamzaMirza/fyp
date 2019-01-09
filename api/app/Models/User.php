<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 09 Jan 2019 15:41:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $fname
 * @property string $username
 * @property string $password
 * @property string $lname
 * @property string $address
 * @property string $education
 * @property string $cv
 * @property string $picture
 *
 * @package App\Models
 */
class User extends Eloquent
{
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'fname',
		'username',
		'password',
		'lname',
		'address',
		'education',
		'cv',
		'picture'
	];
}
