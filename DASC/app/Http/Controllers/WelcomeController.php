<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SchoolDetail;
use DB;

class WelcomeController extends Controller
{
    public function index(){
        $schoolInformations = DB::table('school_details')->select('location')->distinct()->get();
        return view('frontEnd.homeContent',['schoolInformations'=>$schoolInformations]);
    }
    public function about(){
        return view('frontEnd.layouts.about');
    }
    public function compare(){
        return view('frontEnd.layouts.compare');
    }
    public function contact(){
        return view('frontEnd.layouts.contact');
    }

}