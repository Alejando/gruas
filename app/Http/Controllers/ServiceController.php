<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
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
use App\Models\Cabinero;
use App\Models\Unit;
use App\Models\Operator;
use DB;

class ServiceController extends AppBaseController
{

	/**
	 * Display a listing of the Post.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$query = Service::query();
        $columns = Schema::getColumnListing('$TABLE_NAME$');
        $attributes = array();

        foreach($columns as $attribute){
            if($request[$attribute] == true)
            {
                $query->where($attribute, $request[$attribute]);
                $attributes[$attribute] =  $request[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        $services = $query->get();

        return view('services.index')
            ->with('services', $services)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Service.
	 *
	 * @return Response
	 */
	public function create()
	{	
		/*Lists*/
		$brands = Brand::lists('name_brand', 'name_brand');
		$subbrands = Subbrand::lists('name_sub_brand', 'name_sub_brand');
		$models = Vehiclemodel::lists('model_year', 'model_year');
		return view('services.create')->with('brands', $brands)->with('subbrands', $subbrands)->with('models', $models);

	}

	public function createService($id)
	{
		if ($id ==1) {
			/*Lists*/
		$brands = Brand::lists('name_brand', 'name_brand');
		$subbrands = Subbrand::lists('name_sub_brand', 'name_sub_brand');
		$models = Vehiclemodel::lists('model_year', 'model_year');
		$description = Particular::lists('type', 'type');
		$types = Particular::lists('alias', 'alias');
		$cabineros = Cabinero::lists('name', 'name');
		$units = Unit::lists('economic_number', 'economic_number');
		$operators = Operator::lists('name', 'name');
		return view('services.create')
		->with('brands', $brands)
		->with('subbrands', $subbrands)
		->with('models', $models)
		->with('description', $description)
		->with('types', $types)
		->with('cabineros', $cabineros)
		->with('units', $units)
		->with('operators', $operators);
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

	/**
	 * Store a newly created Service in storage.
	 *
	 * @param CreateServiceRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateServiceRequest $request)
	{
        $input = $request->all();

		/*$service = Service::create($input);

		Flash::message('Service saved successfully.');

		return redirect(route('services.index'));*/
		return dd($input);
	}

	/**
	 * Display the specified Service.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$service = Service::find($id);

		if(empty($service))
		{
			Flash::error('Service not found');
			return redirect(route('services.index'));
		}

		return view('services.show')->with('service', $service);
	}

	/**
	 * Show the form for editing the specified Service.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$service = Service::find($id);

		if(empty($service))
		{
			Flash::error('Service not found');
			return redirect(route('services.index'));
		}

		return view('services.edit')->with('service', $service);
	}

	/**
	 * Update the specified Service in storage.
	 *
	 * @param  int    $id
	 * @param CreateServiceRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateServiceRequest $request)
	{
		/** @var Service $service */
		$service = Service::find($id);

		if(empty($service))
		{
			Flash::error('Service not found');
			return redirect(route('services.index'));
		}

		$service->fill($request->all());
		$service->save();

		Flash::message('Service updated successfully.');

		return redirect(route('services.index'));
	}

	/**
	 * Remove the specified Service from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Service $service */
		$service = Service::find($id);

		if(empty($service))
		{
			Flash::error('Service not found');
			return redirect(route('services.index'));
		}

		$service->delete();

		Flash::message('Service deleted successfully.');

		return redirect(route('services.index'));
	}

	public function getSubbrands(Request $request, $id)
	{
		if($request->ajax()){
            $subbrands = Subbrand::subbrands($id);
            return response()->json($subbrands);
        }
	}
}
