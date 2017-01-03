<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    
	public $table = "assistances";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "type",
		"description",
		"inside_of_periferico",
		"cost_kilometer",
		"maneuvers",
		"wait_hour",
		"dolly_use",
		"flag",
		"pension",
		"conditioning",
	];

	public static $rules = [
	    "type" => "required",
		"description" => "required",
		"inside_of_periferico" => 'required|numeric',
		"cost_kilometer" => "required|numeric",
		"maneuvers" => "required|numeric",
		"wait_hour" => "required|numeric",
		"dolly_use" => "required|numeric",
		"flag" => "required|numeric",
		"pension" => "required|numeric",
		"conditioning" => "required|numeric",
	];

}
