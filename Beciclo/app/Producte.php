<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Producte extends Model {

	public function preferits()
	{
		return $this->hasMany('App\Preferit');
	}
	public function comentaris()
	{
		return $this->hasMany('App\Comentari');
	}
		public function usuari()
	{
		return $this->belongsTo('App\Usuari');
	}


}
