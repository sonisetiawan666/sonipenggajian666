<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gaji extends Model
{
        
    protected $primaryKey = 'id';
	protected $table = 'gaji';

	protected $fillable = [
		'id', 
		'id_user', 
		'periode_awal',
		'periode_akhir',
		'total_gaji',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\user','id_user');
	}

}
