<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absensievent extends Model
{
    use SoftDeletes;
    
    protected $primaryKey = 'id';
	protected $table = 'absensi_event';

	protected $fillable = [
		'id', 
		'id_event',
        'tanggal_absensi',
        'status',
        'keterangan',
	];

	public function event()
    {
        return $this->belongsTo('App\Event','id_event');
    }
}
