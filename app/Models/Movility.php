<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movility extends Model
{
    
	public $table = "movilities";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "type",
		"description",
		"local_service",
		"single_return",
		"dolly_use",
		"wait_hour",
		"maneuvers",
		"tlajomulco_to_GDL",
		"cost_kilometer",
		"deposit_outside_GDL",
		"conditioning_hour"
	];

	public static $rules = [
	    "type" => "required",
		"description" => "required",
		"local_service" => "required|numeric",
		"single_return" => "required|numeric",
		"dolly_use" => "required|numeric",
		"wait_hour" => "required|numeric",
		"maneuvers" => "required|numeric",
		"tlajomulco_to_GDL" => "required|numeric",
		"cost_kilometer" => "required|numeric",
		"deposit_outside_GDL" => "required|numeric",
		"conditioning_hour" => "required|numeric"
	];

}
