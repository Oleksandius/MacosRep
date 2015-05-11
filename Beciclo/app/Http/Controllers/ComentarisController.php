<?php namespace App\Http\Controllers;
use App\Producte;
use App\Comentari;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ComentarisController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('comentaris.index', compact('comentari'));
	}

	/**
	 * Show the form for creating a new resource.
	 * @param Producte $producte
	 * @return Response
	 */
	public function create(Producte $producte)
	{
		return view('comentaris.create', compact('comentari'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Producte $producte
	 * @return Response
	 */
	public function store(Producte $producte)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Producte $producte, Comentari $comentari
	 * @return Response
	 */
	public function show(Producte $producte, Comentari $comentari)
	{
		return view('comentaris.show', compact('producte', 'comentari'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Producte $producte, Comentari $comentari
	 * @return Response
	 */
	public function edit(Producte $producte, Comentari $comentari)
	{
		return view('comentaris.edit', compact('producte', 'comentari'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Producte $producte, Comentari $comentari
	 * @return Response
	 */
	public function update(Producte $producte, Comentari $comentari)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Producte $producte, Comentari $comentari
	 * @return Response
	 */
	public function destroy(Producte $producte, Comentari $comentari)
	{
		//
	}

}
