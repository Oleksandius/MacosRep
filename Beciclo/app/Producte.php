<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Producte extends Model {
    
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'productes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['titol', 'marca', 'model', 'preu', 'any', 'pes_aprox', 'material', 'estat', 'comentari', 'color', 'foto', 'user_id'];

   public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function comentaris(){
		return $this->hasMany('App\Comentari');
	}

}
