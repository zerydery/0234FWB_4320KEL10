<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class angsur extends Model
{
    protected $table = 'angsur';
	protected $guarded=['id'];
	
	public function pinjam(){
    	return $this->belongsTo('App\pinjam');
    }
	public function pengelola(){
    	return $this->belongsTo('App\pengelola');
    }
	public function laporan(){
    	return $this->hasMany('App\laporan');
    }
	public function listAngsur(){
        $out = [];
        foreach ($this->all() as $angs) {
            $out[$angs->id]="No. Angsur {$angs->id}";
        }
        return $out;
    }
}
