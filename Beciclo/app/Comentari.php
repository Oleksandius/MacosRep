<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentari extends Model {

	public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function producte()
	{
		return $this->belongsTo('App\Producte');
	}
	
}
