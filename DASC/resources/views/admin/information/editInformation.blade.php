@extends('layouts.app')

@section('content')
    <br/>
    <hr/>
    <h1 class="text-center text-success">Edit School Information</h1>
    <hr/>
    <h1 class="text-success text-center">{{session('message')}}</h1>
    <hr/>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                {!!  Form::open([ 'url' =>'/information/update','name'=>'editInformationForm', 'method' => 'POST', 'class' => 'form-horizontal' ]) !!}
                <div class="form-group">
                    {!! Form::label('school_name', 'School Name', ['class'=>'control-label col-sm-3'] )  !!}
                    <div class="col-sm-9">
                        {!! Form::text('school_name',  $value = $informationById->school_name, ['class'=>'form-control', 'placeholder' => 'Enter School name'] )  !!}
                        <input type="hidden" name="school_id" value="{{$informationById->id}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Location</label>
                    <div class="col-sm-9">
                        <input type="text" name="location" value="{{$informationById->location}}" class="form-control" placeholder="Enter school Location">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Types of Education System</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="education_type">
                            <option>---Select School Education Type---</option>
                            <option value="1">Boys</option>
                            <option value="2">Girls</option>
                            <option value="3">Both</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Permanent Campus</label>
                    <div class="col-sm-9">
                        <input type="radio" name="campus" value="1"> Yes
                        <input type="radio" name="campus" value="0"> No
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Total Student</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" value="{{$informationById->school_student}}" name="school_student" placeholder="Enter total student of the school">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Total Teacher</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" value="{{$informationById->school_teacher}}" name="school_teacher" placeholder="Enter total teacher of the school">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Number of Classroom</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" value="{{$informationById->school_classroom}}" name="school_classroom" placeholder="Enter total Classroom of the school">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">English Version</label>
                    <div class="col-sm-9">
                        <input type="radio" name="version" value="1"> Yes
                        <input type="radio" name="version" value="0"> No
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Have Science Lab?</label>
                    <div class="col-sm-9">
                        <input type="radio" name="science_lab" value="1"> Yes
                        <input type="radio" name="science_lab" value="0"> No
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Have Computer Lab</label>
                    <div class="col-sm-9">
                        <input type="radio" name="computer_lab" value="1"> Yes
                        <input type="radio" name="computer_lab" value="0"> No
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Total Computer</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" value="{{$informationById->total_computer}}" name="total_computer" placeholder="Enter total number of Computer">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Have Computer Teacher</label>
                    <div class="col-sm-9">
                        <input type="radio" name="computer_teacher" value="1"> Yes
                        <input type="radio" name="computer_teacher" value="0"> No
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Have Library?</label>
                    <div class="col-sm-9">
                        <input type="radio" name="library" value="1"> Yes
                        <input type="radio" name="library" value="0"> No
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Have Separate Toilet for Girls?</label>
                    <div class="col-sm-9">
                        <input type="radio" name="toilet" value="1"> Yes
                        <input type="radio" name="toilet" value="0"> No
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Is It MPO Occupied</label>
                    <div class="col-sm-9">
                        <input type="radio" name="mpo_occupied" value="1"> Yes
                        <input type="radio" name="mpo_occupied" value="0"> No
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Publication Status</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="publication_status">
                            <option>---Select Publication Status---</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" name="btn" value="Update School Info" class="btn btn-success btn-block">
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script>
        document.forms['editInformationForm'].elements['education_type'].value='{{$informationById->education_type}}';
        document.forms['editInformationForm'].elements['version'].value='{{$informationById->version}}';
        document.forms['editInformationForm'].elements['campus'].value='{{$informationById->campus}}';
        document.forms['editInformationForm'].elements['science_lab'].value='{{$informationById->science_lab}}';
        document.forms['editInformationForm'].elements['computer_lab'].value='{{$informationById->computer_lab}}';
        document.forms['editInformationForm'].elements['computer_teacher'].value='{{$informationById->computer_teacher}}';
        document.forms['editInformationForm'].elements['library'].value='{{$informationById->library}}';
        document.forms['editInformationForm'].elements['toilet'].value='{{$informationById->toilet}}';
        document.forms['editInformationForm'].elements['mpo_occupied'].value='{{$informationById->mpo_occupied}}';
        document.forms['editInformationForm'].elements['publication_status'].value='{{$informationById->publication_status}}';
    </script>

@endsection