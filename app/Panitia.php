<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Panitia extends Model
{
    use SoftDeletes;
    
    protected $primaryKey = 'id';
	protected $table = 'panitia';

	protected $fillable = [
		'id', 
		'id_user',
		'id_event',
	];

	public function user()
    {
        return $this->belongsTo('App\User','id_user');
	}
	
	public function event()
    {
        return $this->belongsTo('App\Event','id_event');
	}
	
	public function detabsenevent()
	{
		return $this->hasMany('App\DetAbsenEvent','id_panitia');
	}
}
