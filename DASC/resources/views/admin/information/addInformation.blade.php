@extends('layouts.app')

@section('content')
    <br/>
    <hr/>
    <h1 class="text-center text-success">Add School Information</h1>
    <hr/>

    <h1 class="text-success text-center">{{session('message')}}</h1>
    <hr/>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                {!!  Form::open([ 'url' =>'/information/add', 'method' => 'POST', 'class' => 'form-horizontal' ]) !!}
                <div class="form-group">
                    {!! Form::label('school_name', 'School Name', ['class'=>'control-label col-sm-3'] )  !!}
                    <div class="col-sm-9">
                        {!! Form::text('school_name',  $value = null, ['class'=>'form-control', 'placeholder' => 'Enter School name'] )  !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Location</label>
                    <div class="col-sm-9">
                        <input type="text" name="location" class="form-control" placeholder="Enter school Location">
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
                            <select class="form-control" name="campus">
                                <option>---Have Permanent campus?---</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Total Student</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="school_student" placeholder="Enter total student of the school">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Total Teacher</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="school_teacher" placeholder="Enter total teacher of the school">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Number of Classroom</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="school_classroom" placeholder="Enter total Classroom of the school">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">English Version</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="version">
                                <option>---Is it English version?---</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Science Lab</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="science_lab">
                                <option>---Have science Lab?---</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Computer Lab</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="computer_lab">
                            <option>---Have Computer Lab?---</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Total Computer</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="total_computer" placeholder="Enter total number of Computer">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Computer Teacher</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="computer_teacher">
                            <option>---Have Computer Teacher?---</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Library</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="library">
                            <option>---Have Any Library?---</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Separate Toilet for Girls</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="toilet">
                            <option>--Have any Separate Toilet for Girls?---</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Is It MPO Occupied</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="mpo_occupied">
                            <option>---MPO Occupied---</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
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
                        <input type="submit" name="btn" value="Save School Info" class="btn btn-success btn-block">
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection