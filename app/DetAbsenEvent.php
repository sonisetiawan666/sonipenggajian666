<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetAbsenEvent extends Model
{
    use SoftDeletes;
    
    protected $primaryKey = 'id';
	protected $table = 'det_absensi_event';

	protected $fillable = [
		'id', 
		'id_absensi_event',
        'id_event',
        'id_panitia',
	];

	public function event()
    {
        return $this->belongsTo('App\Event','id_event');
    }

    public function absensi_event()
    {
        return $this->belongsTo('App\Absensievent','id_absensi_event');
    }

    public function panitia()
    {
        return $this->belongsTo('App\Panitia','id_panitia');
    }
}
