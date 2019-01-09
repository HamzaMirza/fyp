<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 09 Jan 2019 15:41:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Testscore
 * 
 * @property int $id
 * @property int $cid
 * @property int $uid
 * @property float $score
 * @property \Carbon\Carbon $date
 * @property int $vacancyid
 * @property string $cv
 *
 * @package App\Models
 */
class Testscore extends Eloquent
{
	protected $table = 'testscore';
	public $timestamps = false;

	protected $casts = [
		'cid' => 'int',
		'uid' => 'int',
		'score' => 'float',
		'vacancyid' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'cid',
		'uid',
		'score',
		'date',
		'vacancyid',
		'cv'
	];
}
