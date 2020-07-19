<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function category()
	{
		return $this->belongsTo('App\Category');
	}
    
}

// select * from categories where id = $this->category_id