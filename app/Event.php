<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    
    protected $primaryKey = 'id';
	protected $table = 'event';

	protected $fillable = [
		'id', 
		'id_kategori', 
		'nama_event',
		'tempat_event',
		'tanggal_mulai',
		'tanggal_selesai',
		'fee_per_hari',
		'deskripsi',
	];

	public function kategori()
    {
        return $this->belongsTo('App\Kategori','id_kategori');
	}
	
	public function pelanggan()
    {
        return $this->belongsTo('App\Pelanggan','id_pelanggan');
	}
	
	public function panitia()
    {
        return $this->hasMany('App\Panitia','id_event');
	}
	
	public function detabsenevent()
    {
        return $this->hasMany('App\DetAbsenEvent','id_event');;
    }

}
