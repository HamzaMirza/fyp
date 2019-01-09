<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 09 Jan 2019 15:41:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Company
 * 
 * @property int $id
 * @property string $name
 * @property int $cat_id
 * @property string $description
 * @property string $address
 * 
 * @property \Illuminate\Database\Eloquent\Collection $questions
 *
 * @package App\Models
 */
class Company extends Eloquent
{
	protected $table = 'company';
	public $timestamps = false;

	protected $casts = [
		'cat_id' => 'int'
	];

	protected $fillable = [
		'name',
		'cat_id',
		'description',
		'address'
	];

	public function questions()
	{
		return $this->hasMany(\App\Models\Question::class, 'c_id');
	}
}
