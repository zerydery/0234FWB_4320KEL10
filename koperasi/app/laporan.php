<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    protected $table = 'laporan';
	protected $guarded=['id'];
	
	public function angsur(){
    	return $this->belongsTo('App\angsur');
    }
	public function divisi(){
    	return $this->belongsTo('App\divisi');
    }
}
