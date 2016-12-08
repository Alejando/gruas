<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    
	public $table = "businesses";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "type",
		"description",
		"z1",
		"z2",
		"z3",
		"z4",
		"z5",
		"cost_kilometer",
		"maneuvers_hour",
		"wait_hour",
		"dolly_use"
	];

	public static $rules = [
	    "type" => "required",
		"description" => "required",
		"z1" => "required|numeric",
		"z2" => "required|numeric",
		"z3" => "required|numeric",
		"z4" => "required|numeric",
		"z5" => "required|numeric",
		"cost_kilometer" => "required|numeric",
		"maneuvers_hour" => "required|numeric",
		"wait_hour" => "required|numeric",
		"dolly_use" => "required|numeric"
	];

}
