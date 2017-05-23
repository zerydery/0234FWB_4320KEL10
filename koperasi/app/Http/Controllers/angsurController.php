<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pinjam;
use App\anggota;
use App\pengelola;
use App\angsur;
use Auth;

class angsurController extends Controller
{
	public function awal()
    {
    	$semuaAngsur = angsur::paginate(10);
    	return view('anggota.awalangsur',compact('semuaAngsur'));
    }
	public function awalang($id)
    {
    	$semuaAngsur = angsur::where('pinjam_id',$id)->paginate(10);
    	return view('anggota.awalangangsur',compact('semuaAngsur'));
    }
    public function tambah()
    {
		$pinjam = new pinjam;
		$pengelola = new pengelola;
        return view('anggota.tambaha',compact('pinjam','pengelola'));
    }
	public function simpan(Request $input)
    {
        $angsur = new angsur();
		$angsur->pinjam_id = $input->pinjam_id;
		$angsur->pengelola_id = $input->pengelola_id;
		$pinjam = pinjam::find($angsur->pinjam_id);
		$pinjam->sisa= $pinjam->sisa - 1;
		if($pinjam->sisa >= 0){
		$angsur->save();
        $informasi = $pinjam->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
		}else{
            $informasi = 'Pinjaman sudah lunas';
		}
        return redirect('pinjamanawal')->with(['informasi'=>$informasi]);
    }
	public function bayar($id)
    {
        $angsur = new angsur();
		$angsur->pinjam_id = $id;
		$getpengelola = angsur::where('pengelola_id',Auth::user()->pengelola->id);
		$angsur->pengelola_id = $getpengelola;
		$pinjam = pinjam::find($id);
		$pinjam->sisa= $pinjam->sisa - 1;
		if($pinjam->sisa >= 0){
		$angsur->save();
        $informasi = $pinjam->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
		}else{
            $informasi = 'Pinjaman sudah lunas';
		}
        return redirect('pinjamanawal')->with(['informasi'=>$informasi]);
    }
}
