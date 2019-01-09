<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 09 Jan 2019 15:41:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Designation
 * 
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */
class Designation extends Eloquent
{
	protected $table = 'designation';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
