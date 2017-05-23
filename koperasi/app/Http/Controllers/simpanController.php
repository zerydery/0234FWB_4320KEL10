<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests\simpanRequest;
use App\Http\Requests;
use App\anggota;
use App\pengelola;
use App\simpan;
use Auth;
class simpanController extends Controller
{
	public function awal()
    {
    	$semuaSimpanan = simpan::paginate(10);
    	return view('anggota.awal',compact('semuaSimpanan'));
    }
	public function awalang()
    {
    	$semuaSimpanan = simpan::where('anggota_id',Auth::user()->anggota->id)->paginate(10);
    	return view('anggota.awalang',compact('semuaSimpanan'));
    }
    public function tambah()
    {
		$anggota = new anggota;
		$pengelola = new pengelola;
        return view('anggota.tambahs',compact('anggota','pengelola'));
    }
	public function simpan(Request $input)
    {
		$this->validate($input, [
		'anggota_id' => 'required',
		'pengelola_id' => 'required',
        'jumlah' => 'required|integer'
		]);
        $simpan = new simpan();
        $simpan->anggota_id = $input->anggota_id;
        $simpan->jumlah = $input->jumlah;
		$simpan->pengelola_id = $input->pengelola_id;
        $informasi = $simpan->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
        return redirect('simpananawal');
    }
	public function hapus($id){
    	$simpan=simpan::find($id);
    	if ($simpan->delete()) {
    		if ($simpan->delete()) $this->informasi='simpanan sudah diambil';
    	}
    	return redirect('simpananawal');
    }
}
