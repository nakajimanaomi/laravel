<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    //
    public function index($num1, $num2, $num3) {

        if($num3 == 1){
		return $num1 + $num2;
	    }
	    else if($num3 == 2){
		return $num1 - $num2;
	    }
	    else if($num3 == 3){
		return $num1 * $num2;
	    }
	    else if($num3 == 4){
		return $num1 / $num2;
	    }
        
    }
}
