<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateIndustryRequest;
use App\Models\Industry;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class IndustryController extends AppBaseController
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(Request $request)
	{
		$query = Industry::query();
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

        $industries = $query->get();

        return view('industries.index')
            ->with('industries', $industries)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Industry.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('industries.create');
	}

	/**
	 * Store a newly created Industry in storage.
	 *
	 * @param CreateIndustryRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateIndustryRequest $request)
	{
        $input = $request->all();

		$industry = Industry::create($input);

		Flash::message('Costo de Servicio Industrial guardado con éxito.');

		return redirect(route('industries.index'));
	}

	/**
	 * Display the specified Industry.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$industry = Industry::find($id);

		if(empty($industry))
		{
			Flash::error('Industry not found');
			return redirect(route('industries.index'));
		}

		return view('industries.show')->with('industry', $industry);
	}

	/**
	 * Show the form for editing the specified Industry.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$industry = Industry::find($id);

		if(empty($industry))
		{
			Flash::error('Industry not found');
			return redirect(route('industries.index'));
		}

		return view('industries.edit')->with('industry', $industry);
	}

	/**
	 * Update the specified Industry in storage.
	 *
	 * @param  int    $id
	 * @param CreateIndustryRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateIndustryRequest $request)
	{
		/** @var Industry $industry */
		$industry = Industry::find($id);

		if(empty($industry))
		{
			Flash::error('Industry not found');
			return redirect(route('industries.index'));
		}

		$industry->fill($request->all());
		$industry->save();

		Flash::message('Costo de Servicio Industrial actualizado con éxito.');

		return redirect(route('industries.index'));
	}

	/**
	 * Remove the specified Industry from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Industry $industry */
		$industry = Industry::find($id);

		if(empty($industry))
		{
			Flash::error('Industry not found');
			return redirect(route('industries.index'));
		}

		$industry->delete();

		Flash::message('Industry deleted successfully.');

		return redirect(route('industries.index'));
	}

	public function datosIndustry(Industry $industry)
	{
		return $industry;
	}
}
