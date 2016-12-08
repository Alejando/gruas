<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateVehiclemodelRequest;
use App\Models\Vehiclemodel;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class VehiclemodelController extends AppBaseController
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
		$query = Vehiclemodel::query();
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

        $vehiclemodels = $query->get();

        return view('vehiclemodels.index')
            ->with('vehiclemodels', $vehiclemodels)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Vehiclemodel.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('vehiclemodels.create');
	}

	/**
	 * Store a newly created Vehiclemodel in storage.
	 *
	 * @param CreateVehiclemodelRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateVehiclemodelRequest $request)
	{
        $input = $request->all();

		$vehiclemodel = Vehiclemodel::create($input);

		Flash::message('Vehiclemodel saved successfully.');

		return redirect(route('vehiclemodels.index'));
	}

	/**
	 * Display the specified Vehiclemodel.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$vehiclemodel = Vehiclemodel::find($id);

		if(empty($vehiclemodel))
		{
			Flash::error('Vehiclemodel not found');
			return redirect(route('vehiclemodels.index'));
		}

		return view('vehiclemodels.show')->with('vehiclemodel', $vehiclemodel);
	}

	/**
	 * Show the form for editing the specified Vehiclemodel.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vehiclemodel = Vehiclemodel::find($id);

		if(empty($vehiclemodel))
		{
			Flash::error('Vehiclemodel not found');
			return redirect(route('vehiclemodels.index'));
		}

		return view('vehiclemodels.edit')->with('vehiclemodel', $vehiclemodel);
	}

	/**
	 * Update the specified Vehiclemodel in storage.
	 *
	 * @param  int    $id
	 * @param CreateVehiclemodelRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateVehiclemodelRequest $request)
	{
		/** @var Vehiclemodel $vehiclemodel */
		$vehiclemodel = Vehiclemodel::find($id);

		if(empty($vehiclemodel))
		{
			Flash::error('Vehiclemodel not found');
			return redirect(route('vehiclemodels.index'));
		}

		$vehiclemodel->fill($request->all());
		$vehiclemodel->save();

		Flash::message('Vehiclemodel updated successfully.');

		return redirect(route('vehiclemodels.index'));
	}

	/**
	 * Remove the specified Vehiclemodel from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Vehiclemodel $vehiclemodel */
		$vehiclemodel = Vehiclemodel::find($id);

		if(empty($vehiclemodel))
		{
			Flash::error('Vehiclemodel not found');
			return redirect(route('vehiclemodels.index'));
		}

		$vehiclemodel->delete();

		Flash::message('Vehiclemodel deleted successfully.');

		return redirect(route('vehiclemodels.index'));
	}
}
