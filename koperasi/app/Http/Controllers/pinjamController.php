<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\anggota;
use App\pengelola;
use App\pinjam;
use Auth;
class pinjamController extends Controller
{
	public function awal()
    {
    	$semuaPinjaman = pinjam::paginate(10);
    	return view('anggota.awalpinjam',compact('semuaPinjaman'));
    }
	public function awalang()
    {
    	$semuaPinjaman = pinjam::where('anggota_id',Auth::user()->anggota->id)->paginate(10);
    	return view('anggota.awalangpin',compact('semuaPinjaman'));
    }
    public function tambah()
    {
		$anggota = new anggota;
		$pengelola = new pengelola;
        return view('anggota.tambahp',compact('anggota','pengelola'));
    }
	public function pinjam(Request $input)
    {
        $pinjam = new pinjam();
        $pinjam->anggota_id = $input->anggota_id;
        $pinjam->jumlah = $input->jumlah;
		$pinjam->kali_angsur = $input->angsur;
		$pinjam->angsur = $pinjam->jumlah / $pinjam->kali_angsur;
		$pinjam->pengelola_id = $input->pengelola_id;
		$pinjam->sisa = $input->angsur;
        $informasi = $pinjam->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
        return redirect('pinjamanawal')->with(['informasi'=>$informasi]);
    }
	public function hapus($id){
    	$pinjam=pinjam::find($id);
		if($pinjam->sisa==0){
    	if ($pinjam->delete()) {
    		if ($pinjam->delete()) $this->informasi='simpanan sudah diambil';
    	}
		}else{
            $informasi = 'Pinjaman belum dibayar lunas';
		}
    	return redirect('pinjamanawal');
    }
}
