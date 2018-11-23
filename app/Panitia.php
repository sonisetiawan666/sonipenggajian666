<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Panitia extends Model
{
    use SoftDeletes;
    
    protected $primaryKey = 'id';
	protected $table = 'panitia';

	protected $fillable = [
		'id', 
		'posisi',
	];
}
