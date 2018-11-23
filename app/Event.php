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
		'nama_event',
		'tempat_event',
		'tanggal_mulai',
		'tanggal_selesai',
		'fee_per_hari',
	];
}
