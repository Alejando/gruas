<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subbrand extends Model
{
    
	public $table = "subbrands";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name_sub_brand",
	    "brand_id",
	    "tipo",
	];

	public static $rules = [
	    "name_sub_brand" => "required"
	];

	public function brand()
	{
		return $this->belongsTo('App\Models\Brand');
	}

	public static function subbrands($id)
    {
    	return Subbrand::where('brand_id','=',$id)
    	->get();
    }

}
