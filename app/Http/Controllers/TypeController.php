<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateTypeRequest;
use App\Models\Type;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class TypeController extends AppBaseController
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
		
        $types = Type::all();

        return view('types.index')
            ->with('types', $types);
	}

	/**
	 * Show the form for creating a new Brand.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('types.create');
	}

	/**
	 * Store a newly created Brand in storage.
	 *
	 * @param CreateBrandRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateTypeRequest $request)
	{
        $input = $request->all();

		$type = Type::create($input);

		Flash::message('Tipo guardado correctamente.');

		return redirect(route('types.index'));
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
		$type = Type::find($id);

		if(empty($type))
		{
			Flash::error('Tipo no encontrado');
			return redirect(route('types.index'));
		}

		return view('types.show')->with('type', $type);
	}

	/**
	 * Show the form for editing the specified Brand.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$type = Type::find($id);

		if(empty($type))
		{
			Flash::error('Tipo no encontrad0');
			return redirect(route('types.index'));
		}

		return view('types.edit')->with('type', $type);
	}

	/**
	 * Update the specified Brand in storage.
	 *
	 * @param  int    $id
	 * @param CreateBrandRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateTypeRequest $request)
	{
		/** @var Brand $brand */
		$type = Type::find($id);

		if(empty($type))
		{
			FFlash::error('Tipo no encontrado');
			return redirect(route('brands.index'));
		}

		$type->fill($request->all());
		$type->save();

		Flash::message('Tipo actualizada correctamente.');

		return redirect(route('types.index'));
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
		/** @var Brand $type */
		$type = Type::find($id);

		if(empty($type))
		{
			Flash::error('Tipo no encontrado');
			return redirect(route('types.index'));
		}

		$type->delete();

		Flash::message('Tipo borrada correctamente.');

		return redirect(route('types.index'));
	}
}
