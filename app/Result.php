<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
	protected $dates = [
		'created_at','updated_at'
	];

	protected $fillable = [
		'name', 'cover', 'feedback', 'instagram', 'facebook','vk'
	];

	public function photos()
	{
		return $this->hasMany(ResultsPhotos::class);
	}
}
