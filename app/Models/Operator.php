<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    
	public $table = "operators";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name",
	    "last_name",
		"phone",
		"number_license"
	];

	public static $rules = [
	    "name" => "required|Min:3|Max:50|Alpha",
	    "last_name" => "required|Min:3|Max:50|Alpha",
		"phone" => "required|Numeric",
		"number_license" => "required|AlphaDash"
	];

}
