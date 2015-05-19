<?php

namespace App\Http\Controllers;
use Input;
use Redirect;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producte;
use Illuminate\Http\Request;

class ProductesController extends Controller {
   
    protected $rules = [
		 'titol' => 'required', 'marca' => 'required', 'model' => 'required', 'preu' => 'required', 'any' => 'required', 'pes_aprox' => 'required', 'material' => 'required', 'estat' => 'required', 'comentari' => 'required', 'color' => 'required', 'foto' => 'required', 
	];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return view('productes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $usuari = Auth::user();
        return view('productes.create', compact('usuari'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        
        $this->validate($request, $this->rules);
        $input = Input::all();
        $input['user_id']=Auth::user()->id;
        $input['foto']=file_get_contents($input['foto']);
	Producte::create( $input );
 
	return Redirect::route('users.index')->with('message', 'Producte creat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Producte $producte) {

        return view('productes.show', compact('producte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Producte $producte) {
        return view('productes.edit', compact('producte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Producte $producte) {
        echo "hola";
        $this->validate($request, $this->rules);
        $input = array_except(Input::all(), '_method');
        $input['foto']=file_get_contents($input['foto']);
        $input['user_id']=Auth::user()->id;
        $producte->update($input);

        return Redirect::route('productes.index')->with('message', 'Producre modificat amb exit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
