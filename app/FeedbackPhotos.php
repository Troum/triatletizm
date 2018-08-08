<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackPhotos extends Model
{
	protected $dates = [
		'created_at','updated_at'
	];

	protected $fillable = [
		'feedback_id','photo'
	];

	public function feedback()
	{
		return $this->belongsTo(Feedback::class);
	}
}
