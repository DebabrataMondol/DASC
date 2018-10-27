<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\SchoolDetail;
use DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
       /* if($request->has('school_name')){
            $schoolData = $request->input('school_name');
            $data = DB::select("SELECT * FROM school_details WRERE location LIKE :school_name",['school_name'=>$schoolData]);
            return view('frontEnd.new',['data'=>$data]);
        }*/

        $location = $request->input('location');

        //now get all user and services in one go without looping using eager loading
        //In your foreach() loop, if you have 1000 users you will make 1000 queries

        $users = SchoolDetail::with('school_details', function($query) use ($location) {
            $query->where('location', 'LIKE', '%' . $location . '%');
        })->get();

        /*return view('frontEnd.new', compact('users'));*/
    }
}
