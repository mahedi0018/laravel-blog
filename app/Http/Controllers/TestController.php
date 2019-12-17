<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    public function index(){
    	$result = DB::select('SELECT * FROM scr_company_info');
		dd($result);
    }
}
