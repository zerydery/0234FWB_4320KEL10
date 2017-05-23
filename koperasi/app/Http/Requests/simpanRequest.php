<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class simpanRequest extends Request
{
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		$validasi=[
		];
		return $validasi;
	}
}
