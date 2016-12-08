<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAssistanceRequest;
use App\Models\Assistance;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class AssistanceController extends AppBaseController
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
		$query = Assistance::query();
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

        $assistances = $query->get();

        return view('assistances.index')
            ->with('assistances', $assistances)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Assistance.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('assistances.create');
	}

	/**
	 * Store a newly created Assistance in storage.
	 *
	 * @param CreateAssistanceRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateAssistanceRequest $request)
	{
        $input = $request->all();

		$assistance = Assistance::create($input);

		Flash::message('Costo de Servicio de Asistencia guardado con éxito.');

		return redirect(route('assistances.index'));
	}

	/**
	 * Display the specified Assistance.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$assistance = Assistance::find($id);

		if(empty($assistance))
		{
			Flash::error('Assistance not found');
			return redirect(route('assistances.index'));
		}

		return view('assistances.show')->with('assistance', $assistance);
	}

	/**
	 * Show the form for editing the specified Assistance.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$assistance = Assistance::find($id);

		if(empty($assistance))
		{
			Flash::error('Assistance not found');
			return redirect(route('assistances.index'));
		}

		return view('assistances.edit')->with('assistance', $assistance);
	}

	/**
	 * Update the specified Assistance in storage.
	 *
	 * @param  int    $id
	 * @param CreateAssistanceRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateAssistanceRequest $request)
	{
		/** @var Assistance $assistance */
		$assistance = Assistance::find($id);

		if(empty($assistance))
		{
			Flash::error('Assistance not found');
			return redirect(route('assistances.index'));
		}

		$assistance->fill($request->all());
		$assistance->save();

		Flash::message('Costo de Asistencia actualizado con éxito.');

		return redirect(route('assistances.index'));
	}

	/**
	 * Remove the specified Assistance from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Assistance $assistance */
		$assistance = Assistance::find($id);

		if(empty($assistance))
		{
			Flash::error('Assistance not found');
			return redirect(route('assistances.index'));
		}

		$assistance->delete();

		Flash::message('Assistance deleted successfully.');

		return redirect(route('assistances.index'));
	}
}
