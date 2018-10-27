@extends('frontEnd.layouts.master')

@section('content')

    <div class="slidersection templete clear">
        <div id="slider">
            <a href="#"><img src="{{asset('public/frontEnd')}}/images/slideshow/1.jpg" alt="nature 1" title="This is slider one Title or Description" /></a>
            <a href="#"><img src="{{asset('public/frontEnd')}}/images/slideshow/3.jpg" alt="nature 2" title="This is slider Two Title or Description" /></a>
            <a href="#"><img src="{{asset('public/frontEnd')}}/images/slideshow/5.jpg" alt="nature 3" title="This is slider three Title or Description" /></a>
            <a href="#"><img src="{{asset('public/frontEnd')}}/images/slideshow/1.jpg" alt="nature 4" title="This is slider four Title or Description" /></a>
        </div>

    </div>
    <div class="contentsection contemplete clear">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Find Your Location</h1>
                <br>


               {{--  {!! Form::open([ 'url' =>'/schoolInfo', 'method' => 'POST', 'class' => 'form-horizontal' ]) !!}
                {{ Form::label('location', 'Area:') }}
                <select class="form-control" name="location">
                    @foreach($schoolInformations as $schoolInformation)
                        <option>{{ $schoolInformation->location }}</option>
                    @endforeach
                </select>

                {{ Form::submit('Submit', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
                {!! Form::close() !!} --}}

                <form method="get" action="{{action('SchoollistController@index')}}" name="myForm" onsubmit="return validateForm()">
                    <div class="col-md-3">
                        <select class="form-control" name="location" id="statusType">
                            <option value="">Select Location</option>
                            @foreach( $schoolInformations as $schoolInformation )
                                 <option>{{ $schoolInformation->location }}</option>
                            @endforeach
                        </select>
                    </div>

                    <br/>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9"></div>

                                        <div class="col-md-1">
                                            <button type="submit" class="btn btn-info">Search</button>
                                        </div>
                                       {{--  <div class="col-md-1">
                                            <a href="{{url('monthly_benefits')}}"><span class="btn btn-danger">Cancel</span></a>
                                        </div> --}}
                                    </div>
                                </div>
                </form>
            </div>
        </div>

    </div>

    <script>
        function validateForm() {
            var x = document.forms["myForm"]["location"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }
    </script>
    @endsection()