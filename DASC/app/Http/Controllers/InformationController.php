<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SchoolDetail;
use DB;

class InformationController extends Controller
{
    public function addInformation(){
        return view('admin.information.addInformation');
    }
    public function saveInformation(Request $request){
        SchoolDetail::create($request->all());
        return redirect('/add-Information')->with('message','School Information Created Successfully');
    }
    public function manageInformation(){
        $information = SchoolDetail::all();
        return view('admin.information.manageInformation',compact('information'));
    }

    public function unpublishedInformation($id){
        $informationById = SchoolDetail::find($id);
        $informationById->publication_status=0;
        $informationById->save();
        return redirect('/manage-Information')->with('message','School Information unpublished Successfully');
    }

    public function publishedInformation($id){
        $informationById = SchoolDetail::find($id);
        $informationById->publication_status=1;
        $informationById->save();
        return redirect('/manage-Information')->with('message','School Information published Successfully');
    }

    public function editInformation($id){
        $informationById = SchoolDetail::find($id);
        return view('admin.information.editInformation',['informationById'=>$informationById]);
    }
    public function updateInformation(Request $request){
        $informationId = $request->school_id;
        $information=SchoolDetail::find($informationId);
        $information->school_name=$request->school_name;
        $information->education_type=$request->education_type;
        $information->campus=$request->campus;
        $information->school_student=$request->school_student;
        $information->school_teacher=$request->school_teacher;
        $information->school_classroom=$request->school_classroom;
        $information->version=$request->version;
        $information->science_lab= $request->science_lab;
        $information->computer_lab= $request->computer_lab;
        $information->total_computer= $request->total_computer;
        $information->computer_teacher= $request->computer_teacher;
        $information->library= $request->library;
        $information->toilet= $request->toilet;
        $information->mpo_occupied=$request->mpo_occupied;
        $information->publication_status=$request->publication_status;
        $information->save();
        return redirect('/manage-Information')->with('message','School Information updated Successfully');
    }
    public function deleteInformation(Request $request)
    {
        $informationById = $request->school_id;
        $information = SchoolDetail::find($informationById);
        $information->delete();
        return redirect('/manage-Information')->with('message', 'School Information deleted Successfully');
    }
}
