<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class simpan extends Model
{
    protected $table = 'simpan';
	protected $guarded=['id'];
	
	public function anggota(){
    	return $this->belongsTo('App\anggota');
    }
	public function pengelola(){
    	return $this->belongsTo('App\pengelola');
    }
}
