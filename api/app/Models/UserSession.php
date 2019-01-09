<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 09 Jan 2019 15:41:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserSession
 * 
 * @property int $id
 * @property int $session_response
 * @property \Carbon\Carbon $time
 * @property int $uid
 *
 * @package App\Models
 */
class UserSession extends Eloquent
{
	protected $table = 'user_session';
	public $timestamps = false;

	protected $casts = [
		'session_response' => 'int',
		'uid' => 'int'
	];

	protected $dates = [
		'time'
	];

	protected $fillable = [
		'session_response',
		'time',
		'uid'
	];
}
