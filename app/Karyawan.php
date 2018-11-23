<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    use SoftDeletes;
    
    protected $primaryKey = 'id';
	protected $table = 'karyawan';

	protected $fillable = [
    	'id_jabatan',
    	'nama_karyawan',
    	'tempat_lahir',
    	'tanggal_lahir',
    	'jenis_kelamin',
    	'alamat',
    	'no_telepon',
    	'status_karyawan',
    	'no_rekening',
        'gaji',
    	'photo',
	];
}
