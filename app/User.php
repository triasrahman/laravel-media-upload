<?php namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
}
