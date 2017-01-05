<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePoliceRequest;
use App\Models\Police;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class PoliceController extends AppBaseController
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
		$query = Police::query();
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

        $police = $query->get();

        return view('police.index')
            ->with('police', $police)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Police.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('police.create');
	}

	/**
	 * Store a newly created Police in storage.
	 *
	 * @param CreatePoliceRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatePoliceRequest $request)
	{
        $input = $request->all();

		$police = Police::create($input);

		Flash::message('Costo de Servicio a Policia Federal guardado con éxito.');

		return redirect(route('police.index'));
	}

	/**
	 * Display the specified Police.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$police = Police::find($id);

		if(empty($police))
		{
			Flash::error('Police not found');
			return redirect(route('police.index'));
		}

		return view('police.show')->with('police', $police);
	}

	/**
	 * Show the form for editing the specified Police.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$police = Police::find($id);

		if(empty($police))
		{
			Flash::error('Police not found');
			return redirect(route('police.index'));
		}

		return view('police.edit')->with('police', $police);
	}

	/**
	 * Update the specified Police in storage.
	 *
	 * @param  int    $id
	 * @param CreatePoliceRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreatePoliceRequest $request)
	{
		/** @var Police $police */
		$police = Police::find($id);

		if(empty($police))
		{
			Flash::error('Police not found');
			return redirect(route('police.index'));
		}

		$police->fill($request->all());
		$police->save();

		Flash::message('Costo a Servicio a Policia Federal actualizado con éxito.');

		return redirect(route('police.index'));
	}

	/**
	 * Remove the specified Police from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Police $police */
		$police = Police::find($id);

		if(empty($police))
		{
			Flash::error('Police not found');
			return redirect(route('police.index'));
		}

		$police->delete();

		Flash::message('Police deleted successfully.');

		return redirect(route('police.index'));
	}

	public function datosPolice(Police $police)
	{
		return $police;
	}
}
