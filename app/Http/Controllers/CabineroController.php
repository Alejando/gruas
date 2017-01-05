<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCabineroRequest;
use App\Models\Cabinero;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Hash;
use App\User;
use App\Role;
class CabineroController extends AppBaseController
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
		$query = Cabinero::query();
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

        $cabineros = $query->get();

        return view('cabineros.index')
            ->with('cabineros', $cabineros)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Cabinero.
	 *
	 * @return Response
	 */
	public function create()
	{	
		
		return view('cabineros.create');
	}

	/**
	 * Store a newly created Cabinero in storage.
	 *
	 * @param CreateCabineroRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateCabineroRequest $request)
	{
        $input = $request->all();

        $name = $request->input('name').' '.$request->input('last_name');
        $email = $request->input('email');
        $password = $request->input('password');
        $datos['name'] = $name;
        $datos['email'] = $email;
        $datos['password'] = Hash::make($password);
        $usuario = User::create($datos);
        $id = $usuario->id;
        $user = User::find($id);
        $cabinero = Role::find(2);
        $user->attachRole($cabinero);
        $input['user_id'] = $id;
		$cabinero = Cabinero::create($input);

		Flash::message('Cabinero guardado con éxito.');

		return redirect(route('cabineros.index'));
	}

	/**
	 * Display the specified Cabinero.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$cabinero = Cabinero::find($id);

		if(empty($cabinero))
		{
			Flash::error('Cabinero not found');
			return redirect(route('cabineros.index'));
		}

		return view('cabineros.show')->with('cabinero', $cabinero);
	}

	/**
	 * Show the form for editing the specified Cabinero.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cabinero = Cabinero::find($id);

		if(empty($cabinero))
		{
			Flash::error('Cabinero not found');
			return redirect(route('cabineros.index'));
		}

		return view('cabineros.edit')->with('cabinero', $cabinero);
	}

	/**
	 * Update the specified Cabinero in storage.
	 *
	 * @param  int    $id
	 * @param CreateCabineroRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateCabineroRequest $request)
	{
		/** @var Cabinero $cabinero */
		$cabinero = Cabinero::find($id);

		if(empty($cabinero))
		{
			Flash::error('Cabinero not found');
			return redirect(route('cabineros.index'));
		}

		$cabinero->fill($request->all());
		$cabinero->save();

		Flash::message('Cabinero actualizado con éxito.');

		return redirect(route('cabineros.index'));
	}

	/**
	 * Remove the specified Cabinero from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Cabinero $cabinero */
		$cabinero = Cabinero::find($id);

		if(empty($cabinero))
		{
			Flash::error('Cabinero not found');
			return redirect(route('cabineros.index'));
		}
		if($cabinero->user()->delete()){
			$cabinero->delete();
			Flash::message('Cabinero deleted successfully.');
			return redirect(route('cabineros.index'));
		}
		

		
	}
	public function getCabineros()
	{
		return User::all();
	}
}
