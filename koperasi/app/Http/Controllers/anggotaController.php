<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AnggotaRequest;
use App\Http\Requests;
use App\anggota;
use App\pengguna;
use App\jabatan;

class anggotaController extends Controller
{
    public function tambah()
    {
      return view('anggota.tambah');
    }
    public function simpan(AnggotaRequest $input)
    {
		$this->validate($input,[
			'nama'=>'required',
			'jk'=>'required',
			'tmp_lahir'=>'required',
			'tang_lahir'=>'required',
			'alamat'=>'required',
			'jab'=>'required',
			'username'=>'required',
			'password'=>'required',
		]);
		$pengguna=new pengguna($input->only('username','password'));
    	if ($pengguna->save()) {
    		$anggota = new anggota();
	    	$anggota->nama = $input->nama;
	    	$anggota->jk = $input->jk;
			$anggota->tempat_lahir = $input->tmp_lahir;
			$anggota->tang_lahir = $input->tang_lahir;
	    	$anggota->alamat = $input->alamat;
			$anggota->kd_jab = $input->jab;
	    	if ($pengguna->anggota()->save($anggota)) $this->informasi='Berhasil tambah data anggota';
	    }
    	return redirect('/')->with(['informasi' => $this ->informasi]);
    }
}
