<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
	public function index(){
		return \View::make("index");
	}

	public function calculate(Request $request){
		$hullLength = $request->hull_length;
		$buttocAngle = $request->buttoc_angle;
		$displacement = $request->displacement;
		return \Calculate::all($hullLength, $buttocAngle, $displacement);
	}

}
