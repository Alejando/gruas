<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Models\Particular;
use App\Models\Assistance;
use App\Models\Movility;
use App\Models\Police;
use App\Models\Business;
use App\Models\Industry;
use App\Models\Brand;
use App\Models\Subbrand;
use App\Models\Vehiclemodel;
use DB;

class GeneralController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    public function createService($id)
	{
		if ($id ==1) {
			/*Lists*/
			$particulars= Particular::all();
			$brands = Brand::lists('name_brand', 'name_brand');
			$subbrands = Subbrand::lists('name_sub_brand', 'name_sub_brand');
			/*return view('services.create')
			->with('particulars', $particulars)
			->with('brands', $brands)
			->with('subbrands', $subbrands);*/
			return redirect()->back()->with('brands', $brands)->with('subbrands', $subbrands)->with('option', 1);
		}
		if ($id ==2) {
			$datos = Assistance::lists('alias', 'type');
			return dd($datos);
		}
		if ($id ==3) {
			$datos = Movility::lists('type', 'description');
			return dd($datos);
		}
		if ($id ==4) {
			$datos = Police::lists('type', 'description');
			return dd($datos);
		}
		if ($id ==5) {
			$datos = Business::lists('type', 'description');
			return dd($datos);
		}
		if ($id ==6) {
			$datos = Industry::lists('type', 'description');
			return dd($datos);
		}
	}
}
