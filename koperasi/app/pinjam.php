<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    protected $table = 'pinjam';
	protected $guarded=['id'];
	
	public function anggota(){
    	return $this->belongsTo('App\anggota');
    }
	public function pengelola(){
    	return $this->belongsTo('App\pengelola');
    }
	public function angsur(){
    	return $this->hasMany('App\angsur');
    }
	public function listPinjam(){
        $out = [];
        foreach ($this->all() as $pin) {
            $out[$pin->id]="nama:{$pin->anggota->nama}/ no. pinjaman:{$pin->id}/ angsuran:Rp. {$pin->angsur}";
        }
        return $out;
    }
}