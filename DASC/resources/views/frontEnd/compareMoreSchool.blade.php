@extends('frontEnd.layouts.master')

@section('content')
    <div class="contentsection contemplete clear">
        <h3 style="text-align: center">Comparison Of More School</h3>
        <br/>
        <table style="width:100%;text-align: center"  border="1">
            <thead>
            <tr>
                <th>School Name</th>
                <td>{{$compareMoreData['0']->school_name}}</td>
                <td>{{$compareMoreData['1']->school_name}}</td>
                <td>{{$compareMoreData['2']->school_name}}</td>
            </tr>
            <tr>
                <th>Education Type</th>
                @if($compareMoreData[0]->education_type==1)
                    <td>Boys School</td>
                @elseif($compareMoreData[0]->education_type==2)
                    <td>Girls School</td>
                @else
                    <td>Both</td>
                @endif
                @if($compareMoreData[1]->education_type==1)
                    <td>Boys School</td>
                @elseif($compareMoreData[1]->education_type==2)
                    <td>Girls School</td>
                @else
                    <td>Both</td>
                @endif
                @if($compareMoreData[2]->education_type==1)
                    <td>Boys School</td>
                @elseif($compareMoreData[2]->education_type==2)
                    <td>Girls School</td>
                @else
                    <td>Both</td>
                @endif
            </tr>
            <tr>
                <th>Total Student</th>
                <td>{{$compareMoreData['0']->school_student}}</td>
                <td>{{$compareMoreData['1']->school_student}}</td>
                <td>{{$compareMoreData['2']->school_student}}</td>
            </tr>
            <tr>
                <th>Total Teacher</th>
                <td>{{$compareMoreData['0']->school_teacher}}</td>
                <td>{{$compareMoreData['1']->school_teacher}}</td>
                <td>{{$compareMoreData['2']->school_teacher}}</td>
            </tr>
            <tr>
                <th>Is It English Version?</th>
                <td>{{$compareMoreData['0']->version ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareMoreData['1']->version ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareMoreData['2']->version ==1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <th>Have Science Lab</th>
                <td>{{$compareMoreData['0']->science_lab ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareMoreData['1']->science_lab ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareMoreData['2']->science_lab ==1 ? 'Yes' : 'No'}}</td>
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
                <form method="get" action="{{url('/compareMoreSchool4')}}">

                    <div class="col-md-3">
                        <input type="text" class="form-control" name="school_name" placeholder="Enter School Name" required>


                        <input type="hidden" class="form-control" name="school_first_name" value="{{$compareMoreData['0']->school_name}}">
                        <input type="hidden" class="form-control" name="school_second_name" value="{{$compareMoreData['1']->school_name}}">
                        <input type="hidden" class="form-control" name="school_third_name" value="{{$compareMoreData['2']->school_name}}">
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