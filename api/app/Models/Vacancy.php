<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 09 Jan 2019 15:41:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Vacancy
 * 
 * @property int $id
 * @property int $cid
 * @property string $lastDate
 * @property string $Date
 * @property int $seats
 * @property float $minexperience
 * @property string $city
 * @property float $avgsalary
 * @property int $state
 * @property int $designationid
 * @property int $roletypeid
 *
 * @package App\Models
 */
class Vacancy extends Eloquent
{
	protected $table = 'vacancy';
	public $timestamps = false;

	protected $casts = [
		'cid' => 'int',
		'seats' => 'int',
		'minexperience' => 'float',
		'avgsalary' => 'float',
		'state' => 'int',
		'designationid' => 'int',
		'roletypeid' => 'int'
	];

	protected $fillable = [
		'cid',
		'lastDate',
		'Date',
		'seats',
		'minexperience',
		'city',
		'avgsalary',
		'state',
		'designationid',
		'roletypeid'
	];
}
