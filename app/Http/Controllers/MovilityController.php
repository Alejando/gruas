<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateMovilityRequest;
use App\Models\Movility;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class MovilityController extends AppBaseController
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
		$query = Movility::query();
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

        $movilities = $query->get();

        return view('movilities.index')
            ->with('movilities', $movilities)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Movility.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('movilities.create');
	}

	/**
	 * Store a newly created Movility in storage.
	 *
	 * @param CreateMovilityRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateMovilityRequest $request)
	{
        $input = $request->all();

		$movility = Movility::create($input);

		Flash::message('Costo de Servicio de Movilidad guardado con éxito.');

		return redirect(route('movilities.index'));
	}

	/**
	 * Display the specified Movility.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$movility = Movility::find($id);

		if(empty($movility))
		{
			Flash::error('Movility not found');
			return redirect(route('movilities.index'));
		}

		return view('movilities.show')->with('movility', $movility);
	}

	/**
	 * Show the form for editing the specified Movility.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$movility = Movility::find($id);

		if(empty($movility))
		{
			Flash::error('Movility not found');
			return redirect(route('movilities.index'));
		}

		return view('movilities.edit')->with('movility', $movility);
	}

	/**
	 * Update the specified Movility in storage.
	 *
	 * @param  int    $id
	 * @param CreateMovilityRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateMovilityRequest $request)
	{
		/** @var Movility $movility */
		$movility = Movility::find($id);

		if(empty($movility))
		{
			Flash::error('Movility not found');
			return redirect(route('movilities.index'));
		}

		$movility->fill($request->all());
		$movility->save();

		Flash::message('Costo de Servicio de Movilidad actualizado con éxito.');

		return redirect(route('movilities.index'));
	}

	/**
	 * Remove the specified Movility from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Movility $movility */
		$movility = Movility::find($id);

		if(empty($movility))
		{
			Flash::error('Movility not found');
			return redirect(route('movilities.index'));
		}

		$movility->delete();

		Flash::message('Movility deleted successfully.');

		return redirect(route('movilities.index'));
	}
}
