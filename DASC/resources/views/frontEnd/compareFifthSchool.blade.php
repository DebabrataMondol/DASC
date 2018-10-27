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
                <td>{{$compareSchoolMoreData['4']->school_name}}</td>
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
                @if($compareSchoolMoreData[4]->education_type==1)
                    <td>Boys School</td>
                @elseif($compareSchoolMoreData[4]->education_type==2)
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
                <td>{{$compareSchoolMoreData['4']->school_student}}</td>
            </tr>
            <tr>
                <th>Total Teacher</th>
                <td>{{$compareSchoolMoreData['0']->school_teacher}}</td>
                <td>{{$compareSchoolMoreData['1']->school_teacher}}</td>
                <td>{{$compareSchoolMoreData['2']->school_teacher}}</td>
                <td>{{$compareSchoolMoreData['3']->school_teacher}}</td>
                <td>{{$compareSchoolMoreData['4']->school_teacher}}</td>
            </tr>
            <tr>
                <th>Is It English Version?</th>
                <td>{{$compareSchoolMoreData['0']->version ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['1']->version ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['2']->version ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['3']->version ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['4']->version ==1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <th>Have Science Lab</th>
                <td>{{$compareSchoolMoreData['0']->science_lab ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['1']->science_lab ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['2']->science_lab ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['3']->science_lab ==1 ? 'Yes' : 'No'}}</td>
                <td>{{$compareSchoolMoreData['4']->science_lab ==1 ? 'Yes' : 'No'}}</td>
            </tr>
            </thead>

            {{--<td>{{ $schooldataById-> school_name }}</td>--}}
        </table>
        <br/>
    </div>
@endsection()