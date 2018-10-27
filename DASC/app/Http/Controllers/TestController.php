<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function test(){
        return view('admin.information.test');
    }
    public function saveTest(Request $request){
     Test::create($request->all());
     return redirect('/test-info');
    }
}


