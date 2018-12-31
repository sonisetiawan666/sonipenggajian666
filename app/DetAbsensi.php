<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetAbsensi extends Model
{
    protected $primaryKey = 'id';
	protected $table = 'det_absensi';

	protected $fillable = [
		'id', 
		'id_absensi',
        'id_user',
        'jam_mulai',
        'jam_selesai',
	];

	public function absensi()
    {
        return $this->belongsTo('App\Absensi','id_absensi');
	}

	public function user()
    {
        return $this->belongsTo('App\User','id_user');
	}
}
