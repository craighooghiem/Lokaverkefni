<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{

	protected $table = 'images';
	
	protected $fillable = array('title','image');
	
}
?>
