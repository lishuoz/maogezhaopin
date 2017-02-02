<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
	use SoftDeletes;

	protected $fillable = [
	'title', 'contract', 'contact', 'salary', 'category', 'address', 'description', 'address', 'city', 'email', 'phone', 'website', 
	];

	protected $dates = ['deleted_at'];

	public function employer(){
		return $this->belongsTo('App\User');
	}
}
