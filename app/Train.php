<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
	protected $dates = [
		'created_at', 'updated_at'
	];

	protected $fillable = [
		'train', 'price', 'train_description'
	];

	public function photos()
	{
		return $this->hasMany(TrainsPhotos::class);
	}
}
