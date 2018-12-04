<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelanggan extends Model
{
    use SoftDeletes;
    
    protected $primaryKey = 'id';
	protected $table = 'pelanggan';

	protected $fillable = [
    	'id_pelanggan',
    	'nama_pelanggan',
    	'perusahaan',
    	'alamat',
    	'no_telepon',
    	'email',
	];
}
