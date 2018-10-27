@extends('frontEnd.layouts.master')

@section('content')
    <div class="contentsection contemplete clear">
       
           
            <table style="width:100%"  border="1">
            <thead>
            <tr>
                <th>School Name</th>
                <th>Education Type</th>
                <th>Total Student</th>
                <th>Total Teacher</th>
                <th>Is It English Version?</th>
            </tr>
            </thead>
         
                <tbody style="text-align: center">
                <tr>
                    <td>{{$schooldataById->school_name}}</td>
                    @if($schooldataById->education_type==1)
                    <td>{{$schooldataById->education_type = 'Boys School'}}</td>
                    @elseif($schooldataById->education_type==2)
                        <td>{{$schooldataById->education_type = 'Girls School'}}</td>
                    @else
                        <td>{{$schooldataById->education_type = 'Both'}}</td>
                    @endif
                    <td>{{$schooldataById->school_student}}</td>
                    <td>{{$schooldataById->school_teacher}}</td>
                    <td>{{$schooldataById->version ==1 ? 'Yes' : 'No'}}</td>
                </tr>
                </tbody>
         
        </table>
    </div>

    <div class="contentsection contemplete clear">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Compare With Another School</h1>
                <br>
                <form method="get" action="{{url('/compareSchool')}}">

                    <div class="col-md-3">
                       {{-- <select class="form-control" name="location" id="statusType">
                            <option value="">Select School</option>
                            @foreach($schoolInfo as $row)
                            <option>{{$row->school_name}}</option>
                            @endforeach
                        </select>--}}
                        <input type="text" class="form-control" name="school_name" placeholder="Enter School Name" required>


                        <input type="hidden" class="form-control" name="school_one_name" value="{{$schooldataById->school_name}}">
                    </div>
                    <br/>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-9"></div>

                            <div class="col-md-1">
                                <button type="submit"  class="btn btn-success btn-block">Compare</button>
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
            var x = document.forms["myForm"]["school_name"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }
    </script>

    @endsection()