@extends('frontEnd.layouts.master')

@section('content')
    <div class="contentsection contemplete clear">
    <table style="width:100%"  border="1">
        <thead>
        <tr>
            <th>School Name</th>
            <th>Action</th>
        </tr>
        </thead>
        @foreach($schoollist as $list)
            <tbody style="text-align: center">
            <tr>
                <td>{{$list->school_name}}</td>
                <td>
                    <a href="{{url('/schoolDetails/'.$list->id) }}">
                                        View Details
                                        </a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    </div>



    @endsection()