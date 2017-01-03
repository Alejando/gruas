<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateParticularRequest;
use App\Models\Particular;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class ParticularController extends AppBaseController
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
		$query = Particular::query();
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

        $particulars = $query->get();

        return view('particulars.index')
            ->with('particulars', $particulars)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Particular.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('particulars.create');
	}

	/**
	 * Store a newly created Particular in storage.
	 *
	 * @param CreateParticularRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateParticularRequest $request)
	{
        $input = $request->all();

		$particular = Particular::create($input);

		Flash::message('Costo de servicio Particular creado con éxito.');

		return redirect(route('particulars.index'));
	}

	/**
	 * Display the specified Particular.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$particular = Particular::find($id);

		if(empty($particular))
		{
			Flash::error('Particular not found');
			return redirect(route('particulars.index'));
		}

		return view('particulars.show')->with('particular', $particular);
	}

	/**
	 * Show the form for editing the specified Particular.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$particular = Particular::find($id);

		if(empty($particular))
		{
			Flash::error('Particular not found');
			return redirect(route('particulars.index'));
		}

		return view('particulars.edit')->with('particular', $particular);
	}

	/**
	 * Update the specified Particular in storage.
	 *
	 * @param  int    $id
	 * @param CreateParticularRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateParticularRequest $request)
	{
		/** @var Particular $particular */
		$particular = Particular::find($id);

		if(empty($particular))
		{
			Flash::error('Particular not found');
			return redirect(route('particulars.index'));
		}

		$particular->fill($request->all());
		$particular->save();

		Flash::message('Costo de Servicio Particular actualizado con éxito.');

		return redirect(route('particulars.index'));
	}

	/**
	 * Remove the specified Particular from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Particular $particular */
		$particular = Particular::find($id);

		if(empty($particular))
		{
			Flash::error('Particular not found');
			return redirect(route('particulars.index'));
		}

		$particular->delete();

		Flash::message('Particular deleted successfully.');

		return redirect(route('particulars.index'));
	}
	public function datosParticular(Particular $particular){
		return $particular;
	}
}
