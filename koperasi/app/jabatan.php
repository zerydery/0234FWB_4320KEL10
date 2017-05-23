<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $table=['jabatan'];
	public function anggota(){
    	return $this->hasMany('App\anggota');
    }
}
