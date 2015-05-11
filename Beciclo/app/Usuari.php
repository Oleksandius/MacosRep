<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuari extends Model {

	public function productes()
	{
		return $this->hasMany('App\Producte');
	}

}
