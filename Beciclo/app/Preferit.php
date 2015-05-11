<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Preferit extends Model {

	public function producte()
	{
		return $this->belongsTo('App\Producte');
	}

}
