<?php

namespace App\Http\Controllers;
use Input;
use Redirect;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller {

    protected $rules = [
		 'name' => 'required', 'cognom' => 'required', 'foto' => 'required', 'direccio' => 'required', 'provincia' => 'required', 'ciutat' => 'required', 'telefon' => 'required', 'email' => 'required', 'password' => 'required', 'password_confirmation' => 'required',  
	];
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        return view('users.index', compact('usuari'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show() {
        $usuari = Auth::user();

        return view('users.show', compact('usuari'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit() {
        return view('users.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request) {
        
        $this->validate($request, $this->rules);
        $user=Auth::user();
        $input = array_except(Input::all(), '_method');
        $input['foto']=file_get_contents($input['foto']);
        $input['password'] = bcrypt($input['password']);
        $user->update($input);

        return Redirect::route('users.index')->with('message', 'Dades modificades amb exit!');
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
