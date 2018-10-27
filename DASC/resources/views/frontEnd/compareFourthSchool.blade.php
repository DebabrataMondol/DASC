@extends('frontEnd.layouts.master')

@section('content')
    <div class="contentsection contemplete clear">
        <h3 style="text-align: center">Comparison Of More School</h3>
        <br/>
        <table style="width:100%;text-align: center"  border="1">
            <thead>
            <tr>
                <th>School Name</th>
                <td>{{$compareSchoolMoreData['0']->school_name}}</td>
                <td>{{$compareSchoolMoreData['1']->school_name}}</td>
                <td>{{$compareSchoolMoreData['2']->school_name}}</td>
                <td>{{$compareSchoolMoreData['3']->school_name}}</td>
            </tr>
            <tr>
                <th>Education Type</th>
                @if($compareSchoolMoreData[0]->education_type==1)
                    <td>Boys School</td>
                @elseif($compareSchoolMoreData[0]->education_type==2)
                    <td>Girls School</td>
                @else
                    <td>Both</td>
                @endif
                @if($compareSchoolMoreData[1]->education_type==1)
                    <td>Boys School</td>
                @elseif($compareSchoolMoreData[1]->education_type==2)
                    <td>Girls School</td>
                @else
                    <td>Both</td>
                @endif
                @if($compareSchoolMoreData[2]->education_type==1)
                    <td>Boys School</td>
                @elseif($compareSchoolMoreData[2]->education_type==2)
                    <td>Girls School</td>
                @else
                    <td>Both</td>
                @endif
                @if($compareSchoolMoreData[3]->education_type==1)
                    <td>Boys School</td>
                @elseif($compareSchoolMoreData[3]->education_type==2)
                    <td>Girls School</td>
                @else
                    <td>Both</td>
                @endif
            </tr>
            <tr>
                <th>Total Student</th>
                <td>{{$compareSchoolMoreData['0']->school_student}}</td>
                <td>{{$compareSchoolMoreData['1']->school_student}}</td>
                <td>{{$compareSchoolMoreData['2']->school_student}}</td>
                <td>{{$compareSchoolMoreData['3']->school_student}}</td>
            </tr>
            <tr>
                <th>Total Teacher</th>
                <td>{{$compareSchoolMoreData['0']->school_teacher}}</td>
                <td>{{$compareSchoolMoreData['1']->school_teacher}}</td>
                <td>{{$compareSchoolMoreData['2']->school_teacher}}</td>
                <td>{{$compareSchoolMoreData['3']->school_teacher}}</td>
            </tr>
            <tr>
                <th>Is It English Version?</th>
                <td>{{$compareSchoolMoreData['0']->version ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['1']->version ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['2']->version ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['3']->version ==1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <th>Have Science Lab</th>
                <td>{{$compareSchoolMoreData['0']->science_lab ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['1']->science_lab ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['2']->science_lab ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['3']->science_lab ==1 ? 'Yes' : 'No'}}</td>
            </tr>
            </thead>

            {{--<td>{{ $schooldataById-> school_name }}</td>--}}
        </table>
        <br/>
    </div>

    <div class="contentsection contemplete clear">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Compare With More School</h1>
                <br>
                <form method="get" action="{{url('/compareMoreSchool5')}}">

                    <div class="col-md-3">
                        <input type="text" class="form-control" name="school_name" placeholder="Enter School Name" required>


                        <input type="hidden" class="form-control" name="school_first_name" value="{{$compareSchoolMoreData['0']->school_name}}">
                        <input type="hidden" class="form-control" name="school_second_name" value="{{$compareSchoolMoreData['1']->school_name}}">
                        <input type="hidden" class="form-control" name="school_third_name" value="{{$compareSchoolMoreData['2']->school_name}}">
                        <input type="hidden" class="form-control" name="school_fourth_name" value="{{$compareSchoolMoreData['3']->school_name}}">
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


@endsection()