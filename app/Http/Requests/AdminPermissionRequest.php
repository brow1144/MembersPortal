<?php

namespace App\Http\Requests;

use Gate;
use App\Http\Requests\Request;

class AdminPermissionRequest extends Request {
	public function authorize() {
		return Gate::allows('permission','adminpermission');
	}
	public function rules() {
		return [
			//
		];
	}
}
