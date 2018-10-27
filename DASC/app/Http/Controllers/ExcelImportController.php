<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Test;
use Excel;
use Session;
use File;

class ExcelImportController extends Controller
{
    public function index()
    {
        return view('admin.information.import');
    }
    
    public function importExcel(Request $request){
    //validate the xls file
    $this->validate($request, array(
        'file'      => 'required'
    ));
 
    if($request->hasFile('file')){
        $extension = File::extension($request->file->getClientOriginalName());
        if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
 
            $path = $request->file->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
 
                foreach ($data as $key => $value) {

                    /*echo '<pre>';
                    print_r($value);
                    exit();*/
                    $insert[] = [
                        'school_name' => $value->school_name,
                        'location'=>$value->location,
                        'education_type' => $value->education_type,
                        'campus' => $value->campus,
                        'school_student' => $value->school_student,
                        'school_teacher' => $value->school_teacher,
                        'school_classroom' => $value->school_classroom,
                        'version' => $value->version,
                        'science_lab' => $value->science_lab,
                        'computer_lab' => $value->computer_lab,
                        'total_computer' => $value->total_computer,
                        'computer_teacher'=>$value->computer_teacher,
                        'library'=>$value->library,
                        'toilet'=>$value->toilet,
                        'mpo_occupied'=>$value->mpo_occupied,
                        'publication_status'=>$value->publication_status,
                    ];
                }
 
                if(!empty($insert)){
 
                    $insertData = DB::table('school_details')->insert($insert);
                    if ($insertData) {
                        Session::flash('success', 'Your Data has successfully imported');
                    }else {                        
                        Session::flash('error', 'Error inserting the data..');
                        return back();
                    }
                }
            }
 
            return back();
 
        }else {
            Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
            return back();
        }
    }
}
}