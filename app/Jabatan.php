<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jabatan extends Model
{
    use SoftDeletes;
    
    protected $primaryKey = 'id';
	protected $table = 'jabatan';

	protected $fillable = [
    	'id', 'jabatan'
	];

	public function karyawan()
    {
        return $this->hasMany('App\Karyawan');
    }
}
