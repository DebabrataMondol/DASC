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
                {!!  Form::open([ 'url' =>'/information/test', 'method' => 'POST', 'class' => 'form-horizontal' ]) !!}
                <div class="form-group">
                    {!! Form::label('school_name', 'School Name', ['class'=>'control-label col-sm-3'] )  !!}
                    <div class="col-sm-9">
                        {!! Form::text('school_name',  $value = null, ['class'=>'form-control', 'placeholder' => 'Enter School name'] )  !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Types of Education System</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="educationType">
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
                        <select class="form-control" name="educationType">
                            <option>---Have Permanent campus?---</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
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