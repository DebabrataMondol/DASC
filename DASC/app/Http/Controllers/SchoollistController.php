<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SchoolDetail;
use DB;
use View;

class SchoollistController extends Controller
{
    public function index(Request $request){
        // $schoollist = DB::table('school_details')->select('school_name','education_type','location')->get();
        $search= [];

        if($request->location!=null){
            array_push($search,['location', 'LIKE',$request->location]);
        }

        $schoollist = DB::table('school_details')->where($search)->get();
        /*$view = View::make('frontEnd.new',['schoollist'=>$schoollist]);
        $view->nest('frontEnd.allInfo', 'frontEnd.allInfo',['schoollist'=>$schoollist]);
        return $view;*/

        return view('frontEnd.new',['schoollist'=>$schoollist]);
    }

    public function schoolData($id){
        $schooldataById = SchoolDetail::find($id);
        return view('frontEnd.allInfo', ['schooldataById' => $schooldataById]);
        /*$view = View::make('frontEnd.allInfo',['schooldataById' => $schooldataById]);
        $view->nest('frontEnd.compare', 'frontEnd.compare',['schooldataById' => $schooldataById]);
        return $view;*/
    }

    public function compareSchool(Request $request){
        $search =[];
        $data = [];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_one_name]);
        }
        $school_one_name_info = DB::table('school_details')->where($search)->first();

        array_push($data,$school_one_name_info);

        $search =[];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_name]);
        }
        $schoolInfo = DB::table('school_details')->where($search)->first();
        array_push($data,$schoolInfo);
        return view('frontEnd.compare',['compareData'=>$data]);
    }
    public function compareMoreSchool(Request $request){

        $search =[];
        $data = [];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_first_name]);
        }
        $school_first_name = DB::table('school_details')->where($search)->first();

        array_push($data,$school_first_name);
        $search=[];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_second_name]);
        }
        $school_second_name = DB::table('school_details')->where($search)->first();

        array_push($data,$school_second_name);

        $search =[];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_name]);
        }

        $schoolInfo = DB::table('school_details')->where($search)->first();
        array_push($data,$schoolInfo);

        return view('frontEnd.compareMoreSchool',['compareMoreData'=>$data]);
    }

    public function compareMoreSchool4(Request $request){
        $search =[];
        $data = [];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_first_name]);
        }
        $school_first_name = DB::table('school_details')->where($search)->first();

        array_push($data,$school_first_name);

        $search=[];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_second_name]);
        }
        $school_second_name = DB::table('school_details')->where($search)->first();

        array_push($data,$school_second_name);

        $search=[];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_third_name]);
        }
        $school_third_name = DB::table('school_details')->where($search)->first();

        array_push($data,$school_third_name);

        $search =[];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_name]);
        }

        $schoolInfo = DB::table('school_details')->where($search)->first();
        array_push($data,$schoolInfo);

        return view('frontEnd.compareFourthSchool',['compareSchoolMoreData'=>$data]);
    }
    public function compareMoreSchool5(Request $request){
        $search =[];
        $data = [];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_first_name]);
        }
        $school_first_name = DB::table('school_details')->where($search)->first();

        array_push($data,$school_first_name);

        $search=[];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_second_name]);
        }
        $school_second_name = DB::table('school_details')->where($search)->first();

        array_push($data,$school_second_name);

        $search=[];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_third_name]);
        }
        $school_third_name = DB::table('school_details')->where($search)->first();

        array_push($data,$school_third_name);

        $search=[];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_fourth_name]);
        }
        $school_fourth_name = DB::table('school_details')->where($search)->first();

        array_push($data,$school_fourth_name );

        $search =[];
        if($request->school_name!=null){
            array_push($search,['school_name','LIKE',$request->school_name]);
        }

        $schoolInfo = DB::table('school_details')->where($search)->first();
        array_push($data,$schoolInfo);

        return view('frontEnd.compareFifthSchool',['compareSchoolMoreData'=>$data]);
    }

}
