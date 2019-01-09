<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 09 Jan 2019 15:41:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Question
 * 
 * @property int $id
 * @property string $question
 * @property string $ans1
 * @property string $ans2
 * @property string $ans3
 * @property string $ans4
 * @property string $ans5
 * @property int $draft
 * @property string $time
 * @property int $c_id
 * 
 * @property \App\Models\Company $company
 *
 * @package App\Models
 */
class Question extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'draft' => 'int',
		'c_id' => 'int'
	];

	protected $fillable = [
		'question',
		'ans1',
		'ans2',
		'ans3',
		'ans4',
		'ans5',
		'draft',
		'time',
		'c_id'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'c_id');
	}
}
