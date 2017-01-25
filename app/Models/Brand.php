<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    
	public $table = "brands";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name_brand"
	];

	public static $rules = [
	    "name_brand" => "required"
	];

	public function subbrands()
	{
		return $this->hasMany('App\Models\Subbrand');
	}

}
