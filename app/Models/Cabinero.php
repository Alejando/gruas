<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cabinero extends Model
{
    
	public $table = "cabineros";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name",
	    "last_name",
	    "phone",
	    "schedule",
	    "email",
		"password",
		"user_id",
	];

	public static $rules = [
	    "name" => "required|Alpha",
	    "last_name" => "required",
	    "phone" => "required|numeric",
	    "schedule" => "required",
	    "email" => "required|email",
		"password" => "required|AlphaNum",
	];

	public function user()
    {
         return $this->belongsTo('App\User');
    }

    public function getNamecomplete()
    {
    	return $this->name.$this->last_name;
    }

}
