<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
	protected $table = 'anggota';
	protected $guarded=['id'];
	
	public function jabatan(){
    	return $this->belongsTo('App\jabatan');
    }
	public function pengguna(){
    	return $this->belongsTo('App\pengguna');
    }
	public function listAnggota(){
        $out = [];
        foreach ($this->all() as $ang) {
            $out[$ang->id]="{$ang->nama} ({$ang->id})";
        }
        return $out;
    }
}
