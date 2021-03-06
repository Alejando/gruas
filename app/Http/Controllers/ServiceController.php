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
use App\Models\Empresa;
use App\Models\Type;
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

        $services = $query->Where('estatus','Sin Asignar')->orWhere('estatus','Asignado')->orWhere('estatus','Arribado')->orWhere('estatus','Terminado')->where('payment_received','!=','Recibido')->get();
        
        return view('services.index')->with('services', $services);
        }
     public function reportes(Request $request)
	{
		$query = Service::query();
        $columns = Schema::getColumnListing('$TABLE_NAME$');
        $attributes = array();
        $d=strtotime("-2 Months");
        
        foreach($columns as $attribute){
            if($request[$attribute] == true)
            {
                $query->where($attribute, $request[$attribute]);
                $attributes[$attribute] =  $request[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        $services = $query->where('time_request','>=',date("Y-m-d", $d))->where('estatus','!=','Cotizacion')->where('estatus','!=','Sin Asignar')->get();
        $subbrands = Subbrand::all();
		$units = Unit::all();
		$operators = Operator::all();
		$users= User::all();
		$empresas=Empresa::all(); 

		
        return view('services.reports')
		->with('subbrands', $subbrands)
		->with('units', $units)
		->with('operators', $operators)
		->with('users', $users)
		->with('empresas',$empresas)
		->with('services', $services);
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
		$vehicle_type= Type::lists('name', 'name');

		$operators->prepend('Sin Asignar','Ninguno');
		$vehicle_type->prepend('Sin Asignar','Ninguno');
		$brands->prepend('Sin Asignar','Ninguno');
		$subbrands->prepend('Sin Asignar','Ninguno');
		$models->prepend('Sin Asignar','Ninguno');
		$cabineros->prepend('Sin Asignar','Ninguno');
		$units->prepend('Sin Asignar','Ninguno');
		$colors=['Sin Asingnar'=>'Sin Asingnar','Rojo'=>'Rojo','Verde'=>'Verde','Azul'=>'Azul','Negro'=>'Negro','Plata'=>'Plata','Blanco'=>'Blanco','Beige'=>'Beige','Amarillo'=>'Amarillo','Rosa'=>'Rosa','Gris'=>'Gris','Naranja'=>'Naranja'];


		if ($id ==1|| $id==7) {
			/*Lists*/
		$typeService=$id;
		$types = Particular::lists('type', 'id');

		$types->prepend('Seleccionar','');
		return view('services.create')
		->with('brands', $brands)
		->with('subbrands', $subbrands)
		->with('models', $models)
		->with('types', $types)
		->with('units', $units)
		->with('operators', $operators)
		->with('colors',$colors)
		->with('vehicle_type',$vehicle_type)
		->with('typeService',$typeService);
		}
		if ($id ==2 || $id==8) {
			$typeService=$id;
			$types = Assistance::lists('type', 'id');
			$types->prepend('Seleccionar','');
			$empresas =Empresa::lists('name','name');
			return view('services.create')
			->with('brands', $brands)
			->with('subbrands', $subbrands)
			->with('models', $models)
			->with('types', $types)
			->with('units', $units)
			->with('empresas',$empresas)
			->with('operators', $operators)
			->with('colors',$colors)
			->with('vehicle_type',$vehicle_type)	
			->with('typeService',$typeService);

		}
		if ($id ==3 || $id==9) {
			$typeService=$id;
			$types = Movility::lists('type', 'id');
			$types->prepend('Seleccionar','');
			return view('services.create')
			->with('brands', $brands)
			->with('subbrands', $subbrands)
			->with('models', $models)
			->with('types', $types)
			->with('units', $units)
			->with('operators', $operators)
			->with('vehicle_type',$vehicle_type)	
			->with('colors',$colors)	
			->with('typeService',$typeService);
		}
		if ($id ==4 || $id==10) {
			$typeService=$id;
			$types = Business::lists('type', 'id');
			$types->prepend('Seleccionar','');
			$empresas =Empresa::lists('name','name');
			return view('services.create')
			->with('brands', $brands)
			->with('subbrands', $subbrands)
			->with('models', $models)
			->with('types', $types)
			->with('cabineros', $cabineros)
			->with('units', $units)
			->with('operators', $operators)
			->with('vehicle_type',$vehicle_type)	
			->with('colors',$colors)	
			->with('empresas',$empresas)
			->with('typeService',$typeService);
		}
		if ($id ==5 || $id==11) {
			$typeService=$id;
			$types = Business::lists('type', 'id');
			$types->prepend('Seleccionar','');
			$empresas =Empresa::lists('name','name');
			return view('services.create')
			->with('brands', $brands)
			->with('subbrands', $subbrands)
			->with('models', $models)
			->with('types', $types)
			->with('cabineros', $cabineros)
			->with('units', $units)
			->with('operators', $operators)
			->with('vehicle_type',$vehicle_type)	
			->with('colors',$colors)	
			->with('empresas',$empresas)
			->with('typeService',$typeService);
		}
		if ($id ==6 || $id==12) {
			$typeService=$id;
			$types = Industry::lists('type', 'id');
			$types->prepend('Seleccionar','');
			return view('services.create')
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
		$vehicle_type= Type::lists('name', 'name');

		$vehicle_type->prepend('Sin Asignar','Ninguno');
		$brands->prepend('Sin Asignar','Ninguno');
		$subbrands->prepend('Sin Asignar','Ninguno');
		$models->prepend('Sin Asignar','Ninguno');
		if($service->estatus=="Sin Asignar" || $service->estatus=="Cotizacion"){
			$operators->prepend('Sin Asignar','Ninguno');
			$units->prepend('Sin Asignar','Ninguno');
		}
		$colors=['Sin Asingnar'=>'Sin Asingnar','Rojo'=>'Rojo','Verde'=>'Verde','Azul'=>'Azul','Negro'=>'Negro','Plata'=>'Plata','Blanco'=>'Blanco','Beige'=>'Beige','Amarillo'=>'Amarillo','Rosa'=>'Rosa','Gris'=>'Gris','Naranja'=>'Naranja'];

		if($service->service_type=="Particular"){
			$types = Particular::lists('type', 'id');
			$types->prepend('Seleccionar','');
       		return view('services.edit')
	       		->with('service', $service)
	       		->with('types',$types)
	            ->with('brands', $brands)
	            ->with('subbrands', $subbrands)
	            ->with('models', $models)
				->with('units', $units)
				->with('colors',$colors)
				->with('vehicle_type',$vehicle_type)	
				->with('operators', $operators);
		}
		elseif($service->service_type=="Movilidad"){
			$types = Movility::lists('type', 'id');
			$types->prepend('Seleccionar','');
       		return view('services.edit')
	       		->with('service', $service)
	       		->with('types',$types)
	            ->with('brands', $brands)
	            ->with('subbrands', $subbrands)
	            ->with('models', $models)
				->with('units', $units)
				->with('colors',$colors)
				->with('vehicle_type',$vehicle_type)	
				->with('operators', $operators);
		}
		elseif($service->service_type=="Asistencia"){
			$types = Assistance::lists('type', 'id');
			$types->prepend('Seleccionar','');
			$empresas =Empresa::lists('name','name');
       		return view('services.edit')
	       		->with('service', $service)
	       		->with('types',$types)
	            ->with('brands', $brands)
	            ->with('subbrands', $subbrands)
	            ->with('models', $models)
				->with('empresas',$empresas)
				->with('units', $units)
				->with('colors',$colors)
				->with('vehicle_type',$vehicle_type)	
				->with('operators', $operators);
		}
		elseif($service->service_type=="Policia"){
			$types = Police::lists('type', 'id');
			$types->prepend('Seleccionar','');
			$empresas =Empresa::lists('name','name');
       		return view('services.edit')
	       		->with('service', $service)
	       		->with('types',$types)
	            ->with('brands', $brands)
	            ->with('subbrands', $subbrands)
	            ->with('models', $models)
				->with('units', $units)
				->with('colors',$colors)
				->with('vehicle_type',$vehicle_type)	
				->with('empresas',$empresas)
				->with('operators', $operators);
		}
		elseif($service->service_type=="Empresa"){
			$types = Business::lists('type', 'id');
			$types->prepend('Seleccionar','');
			$empresas =Empresa::lists('name','name');
       		return view('services.edit')
	       		->with('service', $service)
	       		->with('types',$types)
	            ->with('brands', $brands)
	            ->with('subbrands', $subbrands)
	            ->with('models', $models)
				->with('units', $units)
				->with('colors',$colors)
				->with('vehicle_type',$vehicle_type)	
				->with('empresas',$empresas)
				->with('operators', $operators);
		}
		elseif($service->service_type=="Industrial"){
			$types = Industry::lists('type', 'id');
			$types->prepend('Seleccionar','');
       		return view('services.edit')
	       		->with('service', $service)
	       		->with('types',$types)
	       		->with('units', $units)
				->with('vehicle_type',$vehicle_type)	
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
// 		return $request->all();
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
        	$service->update(['payment_received'=>'Recibido','cabinero_end_service'=>Auth::user()->name]);
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
		$fechaInicio = date($request->input('hInicio'));
		$fechaFin = date($request->input('hFin'));
		$empresa = $request->input('empresa');
		$unidad = $request->input('unidad');		
		$operador = $request->input('operador');
		$subMarca = $request->input('subMarca');
		$servicio = $request->input('servicio');
		$cFin=$request->input('cFin');
		$cInicio=$request->input('cInicio');
		$estatus=$request->input('estatus');
		// return $request->all();
		$query = Service::query();
		$query->where('time_request','>=',$fechaInicio)->where('end_time','<=',$fechaFin);
		if($estatus!='0'){
			$query->where('estatus',$estatus);
		}
		if($cInicio!='0'){
			$query->where('cabinero_took_service',$cInicio);
		}
		if($cFin!='0'){
			$query->where('cabinero_end_service',$cFin);
		}
		if($servicio!='0'){
			$query->where('service_type',$servicio);
		}
		if($subMarca!='0'){
			$query->where('sub_brand',$subMarca);
		}
		if($operador!='0'){
			$query->where('operator_assigned',$operador);
		}
		if($unidad!='0'){
			$query->where('unit_assigned',$unidad);
		}
		
		$services=$query->get();

		foreach ($services as $key => $service) {
			 if($service->service_type=="Empresa"){

			 }
			 else if($service->service_type=="Policia"){
			 	 $service->empresa=$service->report_number.' -> '.$service->empresa;
			 	}
			 else if($service->service_type=="Movilidad" || $service->service_type=="Asistencia"){
			 	 $service->empresa=$service->report_number;
			 	}	           
	         else {
	            $service->empresa="No contiene";         
	          }
	        if($service->estatus=="Terminado"){
				$service->nota=' <a  class="btn btn-primary" href="'.route('services.edit', [$service->id]) .'">Ver  <i class="glyphicon glyphicon-edit" title="Ver"></i></a>';
			}			
		}
		
		return $services;
	}
}
