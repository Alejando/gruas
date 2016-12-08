<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class BrandController extends AppBaseController
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
		$query = Brand::query();
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

        $brands = $query->get();

        return view('brands.index')
            ->with('brands', $brands)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Brand.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('brands.create');
	}

	/**
	 * Store a newly created Brand in storage.
	 *
	 * @param CreateBrandRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateBrandRequest $request)
	{
        $input = $request->all();

		$brand = Brand::create($input);

		Flash::message('Brand saved successfully.');

		return redirect(route('brands.index'));
	}

	/**
	 * Display the specified Brand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$brand = Brand::find($id);

		if(empty($brand))
		{
			Flash::error('Brand not found');
			return redirect(route('brands.index'));
		}

		return view('brands.show')->with('brand', $brand);
	}

	/**
	 * Show the form for editing the specified Brand.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$brand = Brand::find($id);

		if(empty($brand))
		{
			Flash::error('Brand not found');
			return redirect(route('brands.index'));
		}

		return view('brands.edit')->with('brand', $brand);
	}

	/**
	 * Update the specified Brand in storage.
	 *
	 * @param  int    $id
	 * @param CreateBrandRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateBrandRequest $request)
	{
		/** @var Brand $brand */
		$brand = Brand::find($id);

		if(empty($brand))
		{
			Flash::error('Brand not found');
			return redirect(route('brands.index'));
		}

		$brand->fill($request->all());
		$brand->save();

		Flash::message('Brand updated successfully.');

		return redirect(route('brands.index'));
	}

	/**
	 * Remove the specified Brand from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Brand $brand */
		$brand = Brand::find($id);

		if(empty($brand))
		{
			Flash::error('Brand not found');
			return redirect(route('brands.index'));
		}

		$brand->delete();

		Flash::message('Brand deleted successfully.');

		return redirect(route('brands.index'));
	}
}
