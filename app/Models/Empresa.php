<?php namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	public $table = "empresas";

	public $primaryKey = "id";
    
	public $timestamps = true;
   public $fillable = [
	    "name"
	];

	public static $rules = [
	    "name" => "required"
		
	];
}
