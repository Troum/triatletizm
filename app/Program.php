<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $dates = [
    	'created_at', 'updated_at'
    ];

    protected $fillable = [
        'name', 'price', 'short_description', 'full_description'
    ];
}
