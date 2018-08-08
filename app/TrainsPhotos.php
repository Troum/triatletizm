<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainsPhotos extends Model
{
	protected $dates = [
		'created_at', 'updated_at'
	];

	protected $fillable = [
		'train_id', 'photo'
	];
}
