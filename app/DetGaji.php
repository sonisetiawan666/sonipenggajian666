<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetGaji extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'id';
	protected $table = 'det_gaji';

	protected $fillable = [
		'id', 
		'id_gaji', 
		'daftar_gaji',
		'deskripsi_gaji',
		'jumlah',
    ];
}
