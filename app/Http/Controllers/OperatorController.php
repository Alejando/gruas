<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateOperatorRequest;
use App\Models\Operator;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use View;
use Auth;
use Session;

class OperatorController extends AppBaseController
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
		$query = Operator::query();
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

        $operators = $query->get();

        return view('operators.index')
            ->with('operators', $operators)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Operator.
	 *
	 * @return Response
	 */
	public function create()
	{	
		if (Auth::user()->hasRole(['admin'])) {
			return view('operators.create');
		}else{
			return abort(403);
		}
		
	}

	/**
	 * Store a newly created Operator in storage.
	 *
	 * @param CreateOperatorRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateOperatorRequest $request)
	{	
		if (Auth::user()->hasRole(['admin'])) {
		$input = $request->all();

		$operator = Operator::create($input);

		Flash::message('Operador guardado con éxito.');

		return redirect(route('operators.index'));
		}else{
			return "No tienes permiso";
		}
        
	}

	/**
	 * Display the specified Operator.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$operator = Operator::find($id);

		if(empty($operator))
		{
			Flash::error('Operator not found');
			return redirect(route('operators.index'));
		}

		return view('operators.show')->with('operator', $operator);
	}

	/**
	 * Show the form for editing the specified Operator.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$operator = Operator::find($id);

		if(empty($operator))
		{
			Flash::error('Operator not found');
			return redirect(route('operators.index'));
		}

		return view('operators.edit')->with('operator', $operator);
	}

	/**
	 * Update the specified Operator in storage.
	 *
	 * @param  int    $id
	 * @param CreateOperatorRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateOperatorRequest $request)
	{
		/** @var Operator $operator */
		$operator = Operator::find($id);

		if(empty($operator))
		{
			Flash::error('Operator not found');
			return redirect(route('operators.index'));
		}

		$operator->fill($request->all());
		$operator->save();

		Flash::message('Operador actualizado con éxito.');

		return redirect(route('operators.index'));
	}

	/**
	 * Remove the specified Operator from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Operator $operator */
		$operator = Operator::find($id);

		if(empty($operator))
		{
			Flash::error('Operator not found');
			return redirect(route('operators.index'));
		}

		$operator->delete();

		Flash::message('Operator deleted successfully.');

		return redirect(route('operators.index'));
	}
}
