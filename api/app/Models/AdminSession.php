<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 09 Jan 2019 15:41:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AdminSession
 * 
 * @property int $id
 * @property int $session_response
 * @property \Carbon\Carbon $time
 * @property int $aid
 *
 * @package App\Models
 */
class AdminSession extends Eloquent
{
	protected $table = 'admin_session';
	public $timestamps = false;

	protected $casts = [
		'session_response' => 'int',
		'aid' => 'int'
	];

	protected $dates = [
		'time'
	];

	protected $fillable = [
		'session_response',
		'time',
		'aid'
	];
}
