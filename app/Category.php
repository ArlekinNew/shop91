<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// protected $primaryKey - 'cat';
	public function products()
	{
		return $this->hasMany('App\Product');//возвращает все товары данной категории
	}
	// protected function tableName(){
	// 	return 'categories';
	// }
     // $table = 'categories';
}

// $products = (select * from $table where $cat_$pk=1)->get()