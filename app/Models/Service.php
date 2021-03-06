<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
	public $table = "services";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
		"empresa",
		"service_type",
	    "name_requests",
		"phone_requests",
		"name_wait",
		"phone_wait",
		"email_request",
		"vehicle_type",
		"brand",
		"sub_brand",
		"model",
		"color",
		"license_plate",
		"failure",
		"carga",
		"street_is",
		"number_is",
		"between_streets",
		"colony",
		"municipality",
		"references",
		"observations",
		"street_deliver",
		"number_deliver",
		"between_streets_deliver",
		"colony_deliver",
		"municipality_deliver",
		"references_deliver",
		"observations_deliver",
		"type",
		"description",
		"zone",
		"extra_kilometers",
		"hours_maneuver",
		"hours_wait",
		"use_dolly",
		"base_price",
		"kilometer_extra_price",
		"maneuver_price",
		"wait_price",
		"dolly_price",
		"payment_method",
		"payment_received",
		"cabinero_took_service",
		"unit_assigned",
		"operator_assigned",
		"time_request",
		"time_promise",
		"real_time",
		"end_time",
		"estatus",
		"service_type",
		"report_number",
		"patrol",
		"machine_type",
		"weight",
		"measure",
		"wheel",
		"platform_move",
		"machine_works",
		"obstructs",
		"height",
		"hours_custody",
		"abanderamiento_hours",
		"abanderamiento_price",
		"back_home",
		"sub_total",
		"total",
		"servicio_nocturno",
		"hora_acondicionamiento",
		"precio_acondicionamiento",
		"cabinero_end_service",
		"iva",
		"otros",
		"nota",
		"concepto_otros"
		//"compliment"
	];

	public static $rules = [
	    "name_requests" => "required",
		// "phone_requests" => "required",
		// "name_wait" => "required",
		// "phone_wait" => "required",
		"email_request" => "email",
		// "vehicle_type" => "required",
		// "brand" => "required",
		// "sub_brand" => "required",
		// "model" => "required",
		// "color" => "required",
		// "license_plate" => "required",
		// "failure" => "required",
		"carga" => "required",
		"street_is" => "required",
		// "number_is" => "required",
		//"between_streets" => "required",
		// "colony" => "required",
		// "municipality" => "required",
		// "references" => "required",
		// "observations" => "required",
		// "street_deliver" => "required",
		// "number_deliver" => "required",
		// "between_streets_deliver" => "required",
		// "colony_deliver" => "required",
		// "municipality_deliver" => "required",
		// "references_deliver" => "required",
		// "observations_deliver" => "required",
		//"type" => "required",
		//"description" => "required",
		//"zone" => "required",
		// "extra_kilometers" => "required",
		// "hours_maneuver" => "required",
		// "hours_wait" => "required",
		// "use_dolly" => "required",
		// "base_price" => "required",
		// "kilometer_extra_price" => "required",
		// "maneuver_price" => "required",
		// "wait_price" => "required",
		// "dolly_price" => "required",
		// "payment_method" => "required",
		// "payment_received" => "required",
		// "cabinero_took_service" => "required",
		// "unit_assigned" => "required",
		// "operator_assigned" => "required",
		// "time_request" => "required",
		// "time_promise" => "required",
		// "real_time" => "required",
		// "end_time" => "required",
		// "estatus" => "required",
		//"compliment" => "required"
		// "service_type" => "required",
		// "report_number" => "required",
		// "patrol" => "required",
		// "machine_type" => "required",
		// "weight" => "required",
		// "measure" => "required",
		// "wheel" => "required",
		// "platform_move" => "required",
		// "machine_works" => "required",
		// "obstructs" => "required",
		// "height" => "required",
		// "banderazo" => "required",
		// "custody" => "required",
		// "hours_custody" => "required",
		// "custody_price" => "required",
		// "abanderamiento" => "required",
		// "abanderamiento_hours" => "required",
		// "abanderamiento_price" => "required",
		// "back_home" => "required",
	];

}
