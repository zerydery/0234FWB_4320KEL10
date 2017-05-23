<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'pengguna';
    protected $guarded = ['id'];
	
	public function anggota(){
    	return $this->hasOne('App\anggota');
    }
}
