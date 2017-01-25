<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*Obtener submarcas de marcas*/


// Route::get('/roles-permissions', function(){
// 	//Roles
// 	$admin = new App\Role;
// 	$admin->name = 'admin';
// 	$admin->display_name = 'User Administrator';
// 	$admin->description = 'The user is allowed to administer the application';
// 	$admin->save();

// 	$cabinero = new App\Role;
// 	$cabinero->name = 'cabinero';
// 	$cabinero->display_name = 'Cabinero Telemarketing';
// 	$cabinero->description = 'This user receives calls from the client and registers the reports in the application';
// 	$cabinero->save();
// 	//Permissions CRUD units
// 	$createUnit = new App\Permission;
// 	$createUnit->name = 'create-unit';
// 	$createUnit->display_name = 'Crate Units';
// 	$createUnit->description = 'Create new unit';
// 	$createUnit->save();

// 	$deleteUnit = new App\Permission;
// 	$deleteUnit->name = 'delete-unit';
// 	$deleteUnit->display_name = 'Delete Units';
// 	$deleteUnit->description = 'Delete unit';
// 	$deleteUnit->save();

// 	$updateUnit = new App\Permission;
// 	$updateUnit->name = 'update-unit';
// 	$updateUnit->display_name = 'Update Units';
// 	$updateUnit->description = 'Update unit';
// 	$updateUnit->save();

// 	$showUnit = new App\Permission;
// 	$showUnit->name = 'show-unit';
// 	$showUnit->display_name = 'Show Units';
// 	$showUnit->description = 'Show all units';
// 	$showUnit->save();

// 	//Permissions CRUD operators
// 	$createOperator = new App\Permission;
// 	$createOperator->name = 'create-operator';
// 	$createOperator->display_name = 'Crate Operator';
// 	$createOperator->description = 'Create new Operator';
// 	$createOperator->save();

// 	$deleteOperator = new App\Permission;
// 	$deleteOperator->name = 'delete-operator';
// 	$deleteOperator->display_name = 'Delete Operator';
// 	$deleteOperator->description = 'Delete Operator';
// 	$deleteOperator->save();

// 	$updateOperator = new App\Permission;
// 	$updateOperator->name = 'update-operator';
// 	$updateOperator->display_name = 'Update Operator';
// 	$updateOperator->description = 'Update Operator';
// 	$updateOperator->save();

// 	$showOperator = new App\Permission;
// 	$showOperator->name = 'show-operator';
// 	$showOperator->display_name = 'Show Operator';
// 	$showOperator->description = 'Show all Operators';
// 	$showOperator->save();

// 	//Permissions CRUD prices
// 	$updatePrice = new App\Permission;
// 	$updatePrice->name = 'update-price';
// 	$updatePrice->display_name = 'Update Price';
// 	$updatePrice->description = 'Update Price';
// 	$updatePrice->save();

// 	$showPrice = new App\Permission;
// 	$showPrice->name = 'show-price';
// 	$showPrice->display_name = 'Show Price';
// 	$showPrice->description = 'Show all Prices';
// 	$showPrice->save();

// 	//Permissions CRUD quotation
// 	$createQuotation = new App\Permission;
// 	$createQuotation->name = 'create-quotation';
// 	$createQuotation->display_name = 'Crate Quotation';
// 	$createQuotation->description = 'Create new Quotation';
// 	$createQuotation->save();

// 	$updateQuotation = new App\Permission;
// 	$updateQuotation->name = 'update-quotation';
// 	$updateQuotation->display_name = 'Update Quotation';
// 	$updateQuotation->description = 'Update Quotation';
// 	$updateQuotation->save();

// 	$showQuotation = new App\Permission;
// 	$showQuotation->name = 'show-quotation';
// 	$showQuotation->display_name = 'Show Quotation';
// 	$showQuotation->description = 'Show all Quotations';
// 	$showQuotation->save();

// 	//Permissions CRUD report
// 	$createReport = new App\Permission;
// 	$createReport->name = 'create-report';
// 	$createReport->display_name = 'Crate Report';
// 	$createReport->description = 'Create new Report';
// 	$createReport->save();

// 	$updateReport = new App\Permission;
// 	$updateReport->name = 'update-report';
// 	$updateReport->display_name = 'Update Report';
// 	$updateReport->description = 'Update Report';
// 	$updateReport->save();

// 	$showReport = new App\Permission;
// 	$showReport->name = 'show-report';
// 	$showReport->display_name = 'Show Report';
// 	$showReport->description = 'Show all Reports';
// 	$showReport->save();

// 	//Permissions query and filter reports
// 	$showRepohistory = new App\Permission;
// 	$showRepohistory->name = 'show-repo';
// 	$showRepohistory->display_name = 'Show Repo History';
// 	$showRepohistory->description = 'Show all Repo History';
// 	$showRepohistory->save();

// 	//asignment permissions to admin
// 	$admin->attachPermissions(array($createUnit, $deleteUnit, $updateUnit, $showUnit, $createOperator, $deleteOperator, $updateOperator, $showOperator, $updatePrice, $showPrice, $createQuotation,$updateQuotation, $showQuotation, $createReport, $updateReport, $showReport, $showRepohistory));

// 	//asignment permissions to cabinero
// 	$cabinero->attachPermissions(array($showUnit, $showOperator, $showPrice, $createQuotation, $updateQuotation, $showQuotation, $createReport, $updateReport, $showReport, $showRepohistory));

// });
// Route::get('/', function () {
//     return view('welcome');
// });

Route::auth();
Route::group(['middleware' => 'auth'], function () {
	
	Route::get('/', 'ServiceController@index');

	Route::resource('operators', 'OperatorController');
	
	Route::get('operators/{id}/delete', [
	    'as' => 'operators.delete',
	    'uses' => 'OperatorController@destroy',
	]);



	Route::resource('units', 'UnitController');

	Route::get('units/{id}/delete', [
	    'as' => 'units.delete',
	    'uses' => 'UnitController@destroy',
	]);

	Route::get('prices', function(){
		return view('dashboard.services');
	});

	Route::resource('particulars', 'ParticularController');

	Route::get('particulars/{id}/delete', [
	    'as' => 'particulars.delete',
	    'uses' => 'ParticularController@destroy',
	]);


	Route::resource('assistances', 'AssistanceController');

	Route::get('assistances/{id}/delete', [
	    'as' => 'assistances.delete',
	    'uses' => 'AssistanceController@destroy',
	]);


	Route::resource('movilities', 'MovilityController');

	Route::get('movilities/{id}/delete', [
	    'as' => 'movilities.delete',
	    'uses' => 'MovilityController@destroy',
	]);


	Route::resource('police', 'PoliceController');

	Route::get('police/{id}/delete', [
	    'as' => 'police.delete',
	    'uses' => 'PoliceController@destroy',
	]);


	Route::resource('businesses', 'BusinessController');

	Route::get('businesses/{id}/delete', [
	    'as' => 'businesses.delete',
	    'uses' => 'BusinessController@destroy',
	]);


	Route::resource('cabineros', 'CabineroController');

	Route::get('cabineros/{id}/delete', [
	    'as' => 'cabineros.delete',
	    'uses' => 'CabineroController@destroy',
	]);


	Route::resource('industries', 'IndustryController');

	Route::get('industries/{id}/delete', [
	    'as' => 'industries.delete',
	    'uses' => 'IndustryController@destroy',
	]);


	Route::resource('brands', 'BrandController');

	Route::get('brands/{id}/delete', [
	    'as' => 'brands.delete',
	    'uses' => 'BrandController@destroy',
	]);

	Route::resource('empresas', 'EmpresaController');

	Route::get('empresas/{id}/delete', [
	    'as' => 'empresas.delete',
	    'uses' => 'EmpresaController@destroy',
	]);

	Route::resource('types', 'TypeController');

	Route::get('types/{id}/delete', [
	    'as' => 'types.delete',
	    'uses' => 'TypeController@destroy',
	]);

	Route::resource('subbrands', 'SubbrandController');

	Route::get('subbrands/{id}/delete', [
	    'as' => 'subbrands.delete',
	    'uses' => 'SubbrandController@destroy',
	]);


	Route::resource('vehiclemodels', 'VehiclemodelController');

	Route::get('vehiclemodels/{id}/delete', [
	    'as' => 'vehiclemodels.delete',
	    'uses' => 'VehiclemodelController@destroy',
	]);


	Route::resource('listusers', 'ListusersController');

	Route::get('listusers/{id}/delete', [
	    'as' => 'listusers.delete',
	    'uses' => 'ListusersController@destroy',
	]);

	Route::get('create-services/{id}/create', [
		'as' => 'services.createService',
		'uses' => 'ServiceController@createService',
	]);


	Route::resource('services', 'ServiceController');

	Route::get('services/{id}/delete', [
	    'as' => 'services.delete',
	    'uses' => 'ServiceController@destroy',
	]);
	Route::get('reports','ServiceController@reportes');
	Route::get('quotations','ServiceController@cotizaciones');

	Route::get('subbrands_ajax/{id}','ServiceController@getSubbrands');
	Route::get('getReportFilter','ServiceController@getReportFilter');
	Route::get('getCabineros','CabineroController@getCabineros');
	Route::get('registrarArribo/{service}',['as'=>'registrarArribo','uses'=>'ServiceController@registrarArribo'])->where('service', '[0-9]+');
	Route::get('registrarTermino/{service}',['as'=>'registrarTermino','uses'=>'ServiceController@registrarTermino'])->where('service', '[0-9]+');
	Route::get('registrarPago/{service}',['as'=>'registrarPago','uses'=>'ServiceController@registrarPago'])->where('service', '[0-9]+');
	Route::get('cambiarCotizacion/{service}',['as'=>'cambiarCotizacion','uses'=>'ServiceController@cambiarCotizacion'])->where('service', '[0-9]+');
	Route::get('cancelarServicio/{service}',['as'=>'cancelarServicio','uses'=>'ServiceController@cancelarServicio'])->where('service', '[0-9]+');
	
	Route::get('datosParticular/{particular}',['as'=>'datosParticular','uses'=>'ParticularController@datosParticular'])->where('particular', '[0-9]+');
	Route::get('datosAssistance/{assistance}',['as'=>'datosAssistance','uses'=>'AssistanceController@datosAssistance'])->where('assistance', '[0-9]+');
	Route::get('datosMovility/{movility}',['as'=>'datosMovility','uses'=>'MovilityController@datosMovility'])->where('movility', '[0-9]+');
	Route::get('datosBusiness/{business}',['as'=>'datosBusiness','uses'=>'BusinessController@datosBusiness'])->where('business', '[0-9]+');
	Route::get('datosPolice/{police}',['as'=>'datosPolice','uses'=>'PoliceController@datosPolice'])->where('police', '[0-9]+');
	Route::get('datosIndustry/{industry}',['as'=>'datosIndustry','uses'=>'IndustryController@datosIndustry'])->where('industry', '[0-9]+');
	
	
});


