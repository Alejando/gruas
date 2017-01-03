<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateUnitRequest;
use App\Models\Unit;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use App\Models\Brand;
use App\Models\Subbrand;
use App\Models\Vehiclemodel;

class UnitController extends AppBaseController
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
		$query = Unit::query();
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

        $units = $query->get();

        return view('units.index')
            ->with('units', $units)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Unit.
	 *
	 * @return Response
	 */
	public function create()
	{	
		/*Lists*/
		$brands = Brand::lists('name_brand', 'name_brand');
		$subbrands = Subbrand::lists('name_sub_brand', 'name_sub_brand');
		$models = Vehiclemodel::lists('model_year', 'model_year');
		return view('units.create')->with('brands', $brands)->with('subbrands', $subbrands)->with('models', $models);
	}

	/**
	 * Store a newly created Unit in storage.
	 *
	 * @param CreateUnitRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateUnitRequest $request)
	{
        $input = $request->all();

		$unit = Unit::create($input);

		Flash::message('Unidad guardada con éxito.');

		return redirect(route('units.index'));
	}

	/**
	 * Display the specified Unit.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$unit = Unit::find($id);

		if(empty($unit))
		{
			Flash::error('Unit not found');
			return redirect(route('units.index'));
		}

		return view('units.show')->with('unit', $unit);
	}

	/**
	 * Show the form for editing the specified Unit.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$unit = Unit::find($id);

		if(empty($unit))
		{
			Flash::error('Unit not found');
			return redirect(route('units.index'));
		}

		return view('units.edit')->with('unit', $unit);
	}

	/**
	 * Update the specified Unit in storage.
	 *
	 * @param  int    $id
	 * @param CreateUnitRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateUnitRequest $request)
	{
		/** @var Unit $unit */
		$unit = Unit::find($id);

		if(empty($unit))
		{
			Flash::error('Unit not found');
			return redirect(route('units.index'));
		}

		$unit->fill($request->all());
		$unit->save();

		Flash::message('Unidad actualizada con éxito.');

		return redirect(route('units.index'));
	}

	/**
	 * Remove the specified Unit from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Unit $unit */
		$unit = Unit::find($id);

		if(empty($unit))
		{
			Flash::error('Unit not found');
			return redirect(route('units.index'));
		}

		$unit->delete();

		Flash::message('Unit deleted successfully.');

		return redirect(route('units.index'));
	}
}
