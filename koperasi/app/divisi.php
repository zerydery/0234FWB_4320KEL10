<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class divisi extends Model
{
    
	protected $table = 'divisi';
	protected $guarded=['id'];
	
	public function laporan(){
    	return $this->hasMany('App\laporan');
    }
	public function listDivisi(){
        $out = [];
        foreach ($this->all() as $div) {
            $out[$div->id]="{$div->nama}";
        }
        return $out;
    }
}
