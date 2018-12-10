<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;
    
    protected $primaryKey = 'id';
	protected $table = 'kategori';

	protected $fillable = [
    	'id', 'kategori'
	];

	public function event()
    {
        return $this->hasMany('App\Event');
    }
}
