<?php

namespace App\Http\Requests;

use Auth;
use App\Http\Requests\Request;

class LoggedInRequest extends Request {
	public function authorize() {
		return Auth::check();
	}
	public function rules() {
		return [
			//
		];
	}
}
