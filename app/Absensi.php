<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absensi extends Model
{
    use SoftDeletes;
    
    protected $primaryKey = 'id';
	protected $table = 'absensi';

	protected $fillable = [
		'id', 
        'tanggal_absensi',
        'status',
    ];
    
    public function detabsensi()
    {
        return $this->hasMany('App\Detabsensi','id_absensi');
    }
}
