<?php namespace App\Http\Controllers;
use App\Producte;
use App\Preferit;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PreferitsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('preferits.index', compact('preferit'));
	}

	/**
	 * Show the form for creating a new resource.
	 * @param  Producte $producte
	 * @return Response
	 */
	public function create(Producte $producte)
	{
		return view('preferits.create', compact('preferit'));
	}

	/**
	 * Store a newly created resource in storage.
	 *@param  Producte $producte
	 * @return Response
	 */
	public function store(Producte $producte)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Producte $producte, Preferit $preferit
	 * @return Response
	 */
	public function show(Producte $producte, Preferit $preferit)
	{
		return view('preferits.show', compact('producte', 'preferit'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Producte $producte, Preferit $preferit
	 * @return Response
	 */
	public function edit(Producte $producte, Preferit $preferit)
	{
		return view('preferits.edit', compact('producte', 'preferit'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Producte $producte, Preferit $preferit
	 * @return Response
	 */
	public function update(Producte $producte, Preferit $preferit)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Producte $producte, Preferit $preferit
	 * @return Response
	 */
	public function destroy(Producte $producte, Preferit $preferit)
	{
		//
	}

}
