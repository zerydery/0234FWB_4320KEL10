<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pinjam;
use App\divisi;
use App\angsur;
use App\laporan;
use Auth;

class laporanController extends Controller
{
    public function awal()
    {
    	$semuaLaporan = laporan::paginate(10);
    	return view('anggota.awallaporan',compact('semuaLaporan'));
    }
	public function tambah()
    {
		$divisi = new divisi;
		$angsur = new angsur;
        return view('anggota.tambahl',compact('divisi','angsur'));
    }
	public function simpan(Request $input)
    {
		$this->validate($input, [
		'angsur_id' => 'required',
		'divisi_id' => 'required'
		]);
		
        $laporan = new laporan();
        $laporan->angsur_id = $input->angsur_id;
        $laporan->divisi_id = $input->divisi_id;
        $informasi = $laporan->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
        return redirect('simpananawal')->with(['informasi'=>$informasi]);
    }
}
