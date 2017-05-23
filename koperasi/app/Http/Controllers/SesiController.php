<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\pengguna;
use Illuminate\Auth\SessionGuard;
use Auth;
class SesiController extends Controller
{
    public function index()
	{
		return view('master');
	}
	public function index2()
	{
		return view('master2');
	}
	public function form()
	{
		if(Auth::check()){
			return redirect('/');
		}else
			return view('login');
	}
	public function validasi(Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
		]);
		$pengguna = Pengguna::where($input->only('username','password'))->first();
		if(! is_null($pengguna)){
			Auth::login($pengguna);
			if(Auth::check() && $pengguna->level==0){
				return redirect('/master')->with('informasi',"Selamat datang pengguna ".Auth::user()->username);
			}else{
				return redirect('/master2')->with('informasi',"Selamat datang admin ".Auth::user()->username);
			}
		}
		return redirect('/')->withErrors(['Pengguna tidak ditemukan']);
	}
	public function logout(){
		if(Auth::check()){
			Auth::logout();
			return redirect('/');
		}else{
			return redirect('/')->withErrors(['Silahkan login terlebih dahulu']);
		}
		
	}
}
