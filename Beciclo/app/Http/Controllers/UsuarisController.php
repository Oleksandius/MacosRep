<?php namespace App\Http\Controllers;
use App\Usuari;
//use App\Producte;
use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class UsuarisController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return view('usuaris.index');
		$usuaris = Usuari::all();
		return view('usuaris.index', compact('usuaris'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('usuaris.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Usuari $usuari
	 * @return Response
	 */
	public function show(Usuari $usuari)
	{
		return view('usuaris.show', compact('usuari'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Usuari $usuari
	 * @return Response
	 */
	public function edit(Usuari $usuari)
	{
		return view('usuaris.edit', compact('usuari'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Usuari $usuari
	 * @return Response
	 */
	public function update(Usuari $usuari)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Usuari $usuari
	 * @return Response
	 */
	public function destroy(Usuari $usuari)
	{
		//
	}

}
