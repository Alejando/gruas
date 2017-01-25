<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    
	public $table = "units";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "type",
	    "description",
	    "brand",
	    "sub_brand",
	    "model",
	    "expiration_date",
		"license_plate",
		"economic_number",
	];

	public static $rules = [
	    "type" => "required",
	    "description" => "required",
	    "brand" => "required",
	    "sub_brand" => "required",
	    "model" => "required",
	    "expiration_date" => "required|date",
		"license_plate" => "required",
		"economic_number" => "required|numeric",
	];

}
