<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Police extends Model
{
    
	public $table = "police";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "type",
		"description",
		"banderazo",
		"cost_kilometer",
		"maneuvers_hour",
		"custody_hour",
		"flag_hour",
		"pension"
	];

	public static $rules = [
	    "type" => "required",
		"description" => "required",
		"banderazo" => "required|numeric",
		"cost_kilometer" => "required|numeric",
		"maneuvers_hour" => "required|numeric",
		"custody_hour" => "required|numeric",
		"flag_hour" => "required|numeric",
		"pension" => "required|numeric"
	];

}
