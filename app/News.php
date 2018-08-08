<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
	use Sluggable;

	protected $dates = [
		'created_at', 'updated_at'
	];

	protected $fillable = [
		'title', 'cover', 'short_new', 'full_new', 'slug'
	];

	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable()
	{
		return [
			'slug' => [
				'source' => 'title'
			]
		];
	}
}
