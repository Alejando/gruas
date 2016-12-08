<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiclemodel extends Model
{
    
	public $table = "vehiclemodels";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "model_year"
	];

	public static $rules = [
	    "model_year" => "required"
	];

}
