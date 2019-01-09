<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 09 Jan 2019 15:41:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Admin
 * 
 * @property int $id
 * @property string $userName
 * @property string $password
 * @property int $c_id
 * @property string $name
 *
 * @package App\Models
 */
class Admin extends Eloquent
{
	protected $table = 'admin';
	public $timestamps = false;

	protected $casts = [
		'c_id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'userName',
		'password',
		'c_id',
		'name'
	];
}
