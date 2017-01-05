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
use Auth;

class ServiceController extends AppBaseController
{
	 public function __construct()
    {
        $this->middleware('auth');
    }	
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

        $services = $query->where('estatus','!=','Terminado')->where('estatus','!=','Cotizacion')->where('estatus','!=','Cancelado')->get();
        
        return view('services.index')->with('services', $services);
        }
     public function reportes(Request $request)
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

        $services = $query->where('estatus','!=','Cotizacion')->get();
        
        return view('services.reports')->with('services', $services);
        }
    public function cotizaciones(Request $request)
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

        $services = $query->where('estatus','Cotizacion')->get();
        
        return view('services.quotations')->with('services', $services);
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
		$brands = Brand::lists('name_brand', 'id');
		$subbrands = Subbrand::lists('name_sub_brand', 'name_sub_brand');
		$models = Vehiclemodel::lists('model_year', 'model_year');
		$cabineros = Cabinero::lists('name', 'name');
		$units = Unit::lists('economic_number', 'economic_number');
		$operators = Operator::lists('name', 'name');
		if ($id ==1|| $id==7) {
			/*Lists*/
		$typeService=$id;
		$types = Particular::lists('type', 'id');
		return view('services.create')
		->with('brands', $brands)
		->with('subbrands', $subbrands)
		->with('models', $models)
		->with('types', $types)
		->with('units', $units)
		->with('operators', $operators)
		->with('typeService',$typeService);
		}
		if ($id ==2 || $id==8) {
			$typeService=$id;
			$types = Assistance::lists('type', 'id');
			return view('services.create')
			->with('brands', $brands)
			->with('subbrands', $subbrands)
			->with('models', $models)
			->with('types', $types)
			->with('units', $units)
			->with('operators', $operators)
			->with('typeService',$typeService);

		}
		if ($id ==3 || $id==9) {
			$typeService=$id;
			$types = Movility::lists('type', 'id');
			return view('services.create')
			->with('brands', $brands)
			->with('subbrands', $subbrands)
			->with('models', $models)
			->with('types', $types)
			->with('units', $units)
			->with('operators', $operators)
			->with('typeService',$typeService);
		}
		if ($id ==4 || $id==10) {
			$typeService=$id;
			$types = Police::lists('type', 'id');
			return view('services.create')
			->with('brands', $brands)
			->with('subbrands', $subbrands)
			->with('models', $models)
			->with('types', $types)
			->with('cabineros', $cabineros)
			->with('units', $units)
			->with('operators', $operators)
			->with('typeService',$typeService);
		}
		if ($id ==5 || $id==11) {
			$typeService=$id;
			$types = Business::lists('type', 'id');
			return view('services.create')
			->with('brands', $brands)
			->with('subbrands', $subbrands)
			->with('models', $models)
			->with('types', $types)
			->with('cabineros', $cabineros)
			->with('units', $units)
			->with('operators', $operators)
			->with('typeService',$typeService);
		}
		if ($id ==6 || $id==12) {
			$typeService=$id;
			$types = Industry::lists('type', 'id');
			return view('services.create')
			->with('brands', $brands)
			->with('subbrands', $subbrands)
			->with('models', $models)
			->with('types', $types)
			->with('cabineros', $cabineros)
			->with('units', $units)
			->with('operators', $operators)
			->with('typeService',$typeService);
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

		$service = Service::create($input);

		$service->update(['time_request'=>date('Y/m/d/  H:i:s')]);
		Flash::message('Servicio creado correctamente.');

		return redirect(route('services.index'));
		// return dd($input);

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

		$service=Service::find($id);
		$brands = Brand::lists('name_brand', 'id');
		$subbrands = Subbrand::lists('name_sub_brand', 'name_sub_brand');
		$models = Vehiclemodel::lists('model_year', 'model_year');
		$units = Unit::lists('economic_number', 'economic_number');
		$operators = Operator::lists('name', 'name');
		if($service->service_type=="Particular"){
			$types = Particular::lists('type', 'id');
       		return view('services.edit')
	       		->with('service', $service)
	       		->with('types',$types)
	            ->with('brands', $brands)
	            ->with('subbrands', $subbrands)
	            ->with('models', $models)
				->with('units', $units)
				->with('operators', $operators);
		}
		elseif($service->service_type=="Movilidad"){
			$types = Movility::lists('type', 'id');
       		return view('services.edit')
	       		->with('service', $service)
	       		->with('types',$types)
	            ->with('brands', $brands)
	            ->with('subbrands', $subbrands)
	            ->with('models', $models)
				->with('units', $units)
				->with('operators', $operators);
		}
		elseif($service->service_type=="Asistencia"){
			$types = Assistance::lists('type', 'id');
       		return view('services.edit')
	       		->with('service', $service)
	       		->with('types',$types)
	            ->with('brands', $brands)
	            ->with('subbrands', $subbrands)
	            ->with('models', $models)
				->with('units', $units)
				->with('operators', $operators);
		}
		elseif($service->service_type=="Policia"){
			$types = Police::lists('type', 'id');
       		return view('services.edit')
	       		->with('service', $service)
	       		->with('types',$types)
	            ->with('brands', $brands)
	            ->with('subbrands', $subbrands)
	            ->with('models', $models)
				->with('units', $units)
				->with('operators', $operators);
		}
		elseif($service->service_type=="Empresa"){
			$types = Business::lists('type', 'id');
       		return view('services.edit')
	       		->with('service', $service)
	       		->with('types',$types)
	            ->with('brands', $brands)
	            ->with('subbrands', $subbrands)
	            ->with('models', $models)
				->with('units', $units)
				->with('operators', $operators);
		}
		elseif($service->service_type=="Industrial"){
			$types = Industry::lists('type', 'id');
       		return view('services.edit')
	       		->with('service', $service)
	       		->with('types',$types)
	            ->with('brands', $brands)
	            ->with('subbrands', $subbrands)
	            ->with('models', $models)
				->with('units', $units)
				->with('operators', $operators);
		}

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
		if($service->estatus=="Cotizacion"){
			$service->update(["time_request"=>date('Y/m/d/  H:i:s')]);
		}
		$service->update($request->all());
		$service->save();

		Flash::message('Servicio actualizado Correctamente.');

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

		Flash::message('Servicio eliminado correctamente.');

		return redirect(route('services.index'));
	}

	public function getSubbrands($id)
	{
		
        return Subbrand::subbrands($id);
	}
	public function registrarArribo(Service $service)
	{
		
        if($service->real_time=='0000-00-00 00:00:00'){
        	$service->update(['real_time'=>date("Y-m-d H:i:s"),'estatus'=>'Arribado']);
        	Flash::message('Se registro el arribo correctamente');
        }else{
        	Flash::message('Ya se ha registrado el arribo');
        }
        return redirect(route('services.index'));
	}
	public function registrarTermino(Service $service)
	{
		if($service->real_time=='0000-00-00 00:00:00'){
			Flash::message('Debes registrar primero el arribo');
		}else{
			if($service->end_time=='0000-00-00 00:00:00'){
        	$service->update(['end_time'=>date("Y-m-d H:i:s"),'estatus'=>'Terminado','cabinero_end_service'=>Auth::user()->name]);
        	Flash::message('Se termino el servicio correctamente');
        }else{
        	Flash::message('Ya se ha registrado el termino');
        }	
		}
        
        return redirect(route('services.index'));
	}
	public function registrarPago(Service $service)
	{
		if($service->payment_received!='Recibido'){
        	$service->update(['payment_received'=>'Recibido']);
        	Flash::message('Se registro el pago correctamente');
        }else{
        	Flash::message('Ya se ha registrado el pago');
        }
        return redirect(route('services.index'));
	}
	public function cancelarServicio(Service $service)
	{
		if($service->estatus!='Cancelado'){
        	$service->update(['estatus'=>'Cancelado']);
        	Flash::message('Se canceló el servicio correctamente');
        }else{
        	Flash::message('Ya se ha cancelado el servicio');
        }
        return redirect(route('services.index'));
	}

	public function cambiarCotizacion(Service $service)
	{
		$service->update(['estatus'=>'Asignado']);
		return redirect(route('services.index'));
	}

	public function getReportFilter(Request $request)
	{
		$fechaInicio=date($request->input('hInicio'));
		$fechaFin=date($request->input('hFin'));

		if($request->input('cInicio')=='0'){
			$service= Service::where('cabinero_end_service',$request->input('cfin'))->where('time_request','>=',$fechaInicio)->where('end_time','<=',$fechaFin)->get();
		}
		elseif($request->input('cFin')=='0'){
			$service= Service::where('cabinero_took_service',$request->input('cInicio'))->where('time_request','>=',$request->input('hInicio'))->where('end_time','<=',$fechaFin)->get();
		}
		else{
			$service= Service::where('cabinero_took_service',$request->input('cInicio'))->where('cabinero_end_service',$request->input('cfin'))->get()->where('time_request','>=',$request->input('hInicio'))->where('end_time','<=',$fechaFin);
		}
		
		return $service;
	}
}
