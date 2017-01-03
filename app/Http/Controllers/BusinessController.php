<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateBusinessRequest;
use App\Models\Business;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class BusinessController extends AppBaseController
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
		$query = Business::query();
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

        $businesses = $query->get();

        return view('businesses.index')
            ->with('businesses', $businesses)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Business.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('businesses.create');
	}

	/**
	 * Store a newly created Business in storage.
	 *
	 * @param CreateBusinessRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateBusinessRequest $request)
	{
        $input = $request->all();

		$business = Business::create($input);

		Flash::message('Costo de Servicio a Empresas guardado con éxito.');

		return redirect(route('businesses.index'));
	}

	/**
	 * Display the specified Business.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$business = Business::find($id);

		if(empty($business))
		{
			Flash::error('Business not found');
			return redirect(route('businesses.index'));
		}

		return view('businesses.show')->with('business', $business);
	}

	/**
	 * Show the form for editing the specified Business.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$business = Business::find($id);

		if(empty($business))
		{
			Flash::error('Business not found');
			return redirect(route('businesses.index'));
		}

		return view('businesses.edit')->with('business', $business);
	}

	/**
	 * Update the specified Business in storage.
	 *
	 * @param  int    $id
	 * @param CreateBusinessRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateBusinessRequest $request)
	{
		/** @var Business $business */
		$business = Business::find($id);

		if(empty($business))
		{
			Flash::error('Business not found');
			return redirect(route('businesses.index'));
		}

		$business->fill($request->all());
		$business->save();

		Flash::message('Costo de Servicio a Empresas actualizado con éxito.');

		return redirect(route('businesses.index'));
	}

	/**
	 * Remove the specified Business from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Business $business */
		$business = Business::find($id);

		if(empty($business))
		{
			Flash::error('Business not found');
			return redirect(route('businesses.index'));
		}

		$business->delete();

		Flash::message('Business deleted successfully.');

		return redirect(route('businesses.index'));
	}
}
