<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateListusersRequest;
use App\Models\Listusers;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Auth;
use App\User;
use App\Role;
use App\Models\Particular;
use App\Models\Assitance;
use App\Models\Movility;
use App\Models\Police;
use App\Models\Business;
use App\Models\Industry;
use DB;

class ListusersController extends AppBaseController
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
		$query = User::query();
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

        $listusers = $query->get();
        return view('listusers.index')
            ->with('listusers', $listusers)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Listusers.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('listusers.create');
	}

	/**
	 * Store a newly created Listusers in storage.
	 *
	 * @param CreateListusersRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateListusersRequest $request)
	{
        $input = $request->all();

		$listusers = User::create($input);

		Flash::message('Usuario guardado correctamente.');

		return redirect(route('listusers.index'));
	}

	/**
	 * Display the specified Listusers.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$listusers = User::find($id);

		if(empty($listusers))
		{
			Flash::error('Usuario no encontrado');
			return redirect(route('listusers.index'));
		}

		return view('listusers.show')->with('listusers', $listusers);
	}

	/**
	 * Show the form for editing the specified Listusers.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$listusers = User::find($id);

		if(empty($listusers))
		{
			Flash::error('Usuario no encontrado');
			return redirect(route('listusers.index'));
		}

		return view('listusers.edit')->with('listusers', $listusers);
	}

	/**
	 * Update the specified Listusers in storage.
	 *
	 * @param  int    $id
	 * @param CreateListusersRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateListusersRequest $request)
	{
		/** @var Listusers $listusers */
		$listusers = User::find($id);

		if(empty($listusers))
		{
			Flash::error('Usuario no encontrado');
			return redirect(route('listusers.index'));
		}

		$listusers->fill($request->all());
		$listusers->save();

		Flash::message('Usuario actualizado correctamente.');

		return redirect(route('listusers.index'));
	}

	/**
	 * Remove the specified Listusers from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Listusers $listusers */
		$listusers = User::find($id);

		if(empty($listusers))
		{
			Flash::error('Usuario no encontrado');
			return redirect(route('listusers.index'));
		}
		if($listusers!=Auth::user()){
			if($listusers->cabinero()->delete()){
				$listusers->delete();
				Flash::message('Usuario eliminado correctamente.');
			}
			else{
				$listusers->delete();
				Flash::message('Usuario eliminado correctamente.');
			}
			
		}else{
			Flash::message('No puedes eliminarte a ti mismo :).');
		}
		
		return redirect(route('listusers.index'));
	}
	public function updateRole(User $user)
	{	
		if(empty($user))
		{
			Flash::error('Usuario no encontrado');
			return redirect(route('listusers.index'));
		}
		if(empty($user->roles[0])){
			$user->roles()->detach();
			$user->roles()->attach($user->id,['role_id'=>1]);
		}else{
			if(empty($user->cabinero)){
				if($user->roles[0]->pivot->role_id==2){
					$user->roles()->detach();
					$user->roles()->attach($user->id,['role_id'=>1]);
					Flash::error('Ya es un Administrador');
				}else{
					Flash::error('Ya es un Administrador');
				}
			}
			else{
				Flash::error('No puede ser Administrador');
			}
			
		}
			
		
		 return  redirect(route('listusers.index'));
	}
}
