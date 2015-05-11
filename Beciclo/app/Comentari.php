<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentari extends Model {

	public function producte()
	{
		return $this->belongsTo('App\Producte');
	}

}
