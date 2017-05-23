<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AnggotaRequest extends Request
{
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		$validasi=[
			'nama'=>'required',
			'jk'=>'required',
			'tmp_lahir'=>'required',
			'tang_lahir'=>'required',
			'alamat'=>'required',
			'jab'=>'required',
			'username'=>'required'
		];
		if($this->is('anggota/tambah')){
			$validasi['password'] = 'required';
		}
		return $validasi;
	}
}
