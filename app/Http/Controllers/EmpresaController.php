<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEmpresaRequest;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class EmpresaController extends AppBaseController
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
		
        $empresas = Empresa::all();

        return view('empresas.index')
            ->with('empresas', $empresas);
	}

	/**
	 * Show the form for creating a new Brand.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('empresas.create');
	}

	/**
	 * Store a newly created Brand in storage.
	 *
	 * @param CreateBrandRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateEmpresaRequest $request)
	{
        $input = $request->all();

		$empresa = Empresa::create($input);

		Flash::message('Empresa guardada correctamente.');

		return redirect(route('empresas.index'));
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
		$empresa = Empresa::find($id);

		if(empty($empresa))
		{
			Flash::error('Empresa no encontrada');
			return redirect(route('empresas.index'));
		}

		return view('empresas.show')->with('empresa', $empresa);
	}

	/**
	 * Show the form for editing the specified Brand.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$empresa = Empresa::find($id);

		if(empty($empresa))
		{
			Flash::error('Empresa no encontrada');
			return redirect(route('empresas.index'));
		}

		return view('empresas.edit')->with('empresa', $empresa);
	}

	/**
	 * Update the specified Brand in storage.
	 *
	 * @param  int    $id
	 * @param CreateBrandRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateEmpresaRequest $request)
	{
		/** @var Brand $brand */
		$empresa = Empresa::find($id);

		if(empty($empresa))
		{
			FFlash::error('Empresa no encontrada');
			return redirect(route('brands.index'));
		}

		$empresa->fill($request->all());
		$empresa->save();

		Flash::message('Empresa actualizada correctamente.');

		return redirect(route('empresas.index'));
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
		/** @var Brand $empresa */
		$empresa = Empresa::find($id);

		if(empty($empresa))
		{
			Flash::error('Empresa no encontrada');
			return redirect(route('empresas.index'));
		}

		$empresa->delete();

		Flash::message('Empresa borrada correctamente.');

		return redirect(route('empresas.index'));
	}
}
