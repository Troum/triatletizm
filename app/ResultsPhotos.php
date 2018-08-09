<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultsPhotos extends Model
{
	protected $dates = [
		'created_at','updated_at'
	];

	protected $fillable = [
		'result_id','photo'
	];

	public function results()
	{
		return $this->belongsTo(Result::class);
	}
}
