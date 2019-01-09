<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 09 Jan 2019 15:41:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	protected $table = 'category';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
