<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $primaryKey = "id";
    
	public $timestamps = true;
   public $fillable = [
	    "name"
	];

	public static $rules = [
	    "name" => "required"
		
	];
}
