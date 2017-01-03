<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSubbrandRequest;
use App\Models\Subbrand;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use App\Models\Brand;

class SubbrandController extends AppBaseController
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
		$query = Subbrand::query();
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

        $subbrands = $query->get();

        return view('subbrands.index')
            ->with('subbrands', $subbrands)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Subbrand.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$brands = Brand::lists('name_brand','id');
		return view('subbrands.create')
		->with('brands', $brands);
	}

	/**
	 * Store a newly created Subbrand in storage.
	 *
	 * @param CreateSubbrandRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateSubbrandRequest $request)
	{
        $input = $request->all();

		$subbrand = Subbrand::create($input);

		Flash::message('Subbrand saved successfully.');

		return redirect(route('subbrands.index'));
	}

	/**
	 * Display the specified Subbrand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$subbrand = Subbrand::find($id);

		if(empty($subbrand))
		{
			Flash::error('Subbrand not found');
			return redirect(route('subbrands.index'));
		}

		return view('subbrands.show')->with('subbrand', $subbrand);
	}

	/**
	 * Show the form for editing the specified Subbrand.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$subbrand = Subbrand::find($id);
		$brands = Brand::lists('name_brand','id');
		if(empty($subbrand))
		{
			Flash::error('Subbrand not found');
			return redirect(route('subbrands.index'));
		}

		return view('subbrands.edit')->with('subbrand', $subbrand)->with('brands',$brands);
	}

	/**
	 * Update the specified Subbrand in storage.
	 *
	 * @param  int    $id
	 * @param CreateSubbrandRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateSubbrandRequest $request)
	{
		/** @var Subbrand $subbrand */
		$subbrand = Subbrand::find($id);

		if(empty($subbrand))
		{
			Flash::error('Subbrand not found');
			return redirect(route('subbrands.index'));
		}

		$subbrand->fill($request->all());
		$subbrand->save();

		Flash::message('Subbrand updated successfully.');

		return redirect(route('subbrands.index'));
	}

	/**
	 * Remove the specified Subbrand from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Subbrand $subbrand */
		$subbrand = Subbrand::find($id);

		if(empty($subbrand))
		{
			Flash::error('Subbrand not found');
			return redirect(route('subbrands.index'));
		}

		$subbrand->delete();

		Flash::message('Subbrand deleted successfully.');

		return redirect(route('subbrands.index'));
	}
}
