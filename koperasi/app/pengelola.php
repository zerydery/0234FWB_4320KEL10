<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;
class pengelola extends Model
{
    protected $table = 'pengelola';
	
	public function pengguna(){
    	return $this->belongsTo('App\pengguna');
	}
	public function simpanan(){
    	return $this->hasMany('App\simpanan');
	}
	public function listPengelola(){
        $out = [];
        foreach ($this->all() as $ang) {
            $out[$ang->id]="{$ang->nama} ({$ang->id})";
        }
        return $out;
    }
}
