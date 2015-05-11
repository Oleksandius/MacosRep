<?php namespace App\Http\Controllers;
use App\Usuari;
use App\Producte;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('productes.index', compact('producte'));
	}

	/**
	 * Show the form for creating a new resource.
	 * @param Usuari $usuari
	 * @return Response
	 */
	public function create(Usuari $usuari)
	{
		return view('productes.create', compact('usuari'));
	}

	/**
	 * Store a newly created resource in storage.
	 * @param Usuari $usuari
	 * @return Response
	 */
	public function store(Usuari $usuari)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Usuari $usuari, Producte $producte
	 * @return Response
	 */
	public function show(Usuari $usuari, Producte $producte)
	{
		return view('productes.show', compact('usuari', 'producte'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Usuari $usuari, Producte $producte
	 * @return Response
	 */
	public function edit(Usuari $usuari, Producte $producte)
	{
		return view('productes.edit', compact('usuari', 'producte'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Usuari $usuari, Producte $producte
	 * @return Response
	 */
	public function update(Usuari $usuari, Producte $producte)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Usuari $usuari, Producte $producte
	 * @return Response
	 */
	public function destroy(Usuari $usuari, Producte $producte)
	{
		//
	}

}
