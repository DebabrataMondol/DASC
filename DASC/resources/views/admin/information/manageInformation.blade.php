@extends('layouts.app')

@section('content')
    <br/>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Manage School Information
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h3>{{ Session::get('message') }}</h3>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>School Name</th>
                            <th>Location</th>
                            <th>Education Type</th>
                            <th>Permanent Campus</th>
                            <th>Total Student</th>
                            <th>Total Teacher</th>
                            <th>Number of Classroom</th>
                            <th>English Version</th>
                            <th>Have Science lab</th>
                            <th>Have Computer Lab</th>
                            <th>Total Computer</th>
                            <th>Have Computer Teacher</th>
                            <th>Have Library</th>
                            <th>Have separate toilet for Girls</th>
                            <th>Is It MPO Occupied</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($information as $information)
                            <tr>
                                <td>{{$information->id}}</td>
                                <td>{{$information->school_name}}</td>
                                <td>{{$information->location}}</td>
                                @if($information->education_type==1)
                                    <td>{{$information->education_type = 'Boys School'}}</td>
                                @elseif($information->education_type==2)
                                    <td>{{$information->education_type = 'Girls School'}}</td>
                                @else
                                    <td>{{$information->education_type = 'Both'}}</td>
                                @endif
                                <td>{{$information->campus ==1 ? 'yes' : 'no'}}</td>
                                <td>{{$information->school_student}}</td>
                                <td>{{$information->school_teacher}}</td>
                                <td>{{$information->school_classroom}}</td>
                                <td>{{$information->version ==1 ? 'yes' : 'no'}}</td>
                                <td>{{$information->science_lab ==1 ? 'yes' : 'no'}}</td>
                                <td>{{$information->computer_lab ==1 ? 'yes' : 'no'}}</td>
                                <td>{{$information->total_computer}}</td>
                                <td>{{$information->computer_teacher ==1 ? 'yes' : 'no'}}</td>
                                <td>{{$information->library ==1 ? 'yes' : 'no'}}</td>
                                <td>{{$information->toilet ==1 ? 'yes' : 'no'}}</td>
                                <td>{{$information->mpo_occupied ==1 ? 'yes' : 'no'}}</td>
                                <td>{{$information->publication_status == 1 ? 'published' : 'unpublished'}}</td>
                                <td class="center">
                                    @if($information->publication_status==1)
                                        <a href="{{ url('/information/unpublished/'.$information->id) }}" title="Unpublished" class="btn btn-primary btn-sm">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/information/published/'.$information->id) }}" title="Published" class="btn btn-warning btn-sm">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ url('/information/edit/'.$information->id) }}" title="Edit" class="btn btn-success btn-sm">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <form action="{{ url('/information/delete/') }}" method="post" id="delete-information" onclick="myfunction()";>
                                        @csrf
                                        <input type="hidden" name="school_id" value="{{$information->id}}">
                                        <button type="submit" title="Delete" class="btn btn-danger btn-sm" name="btn">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <script>
        function myfunction() {
            alert('Are You Sure to delete??');
        }
    </script>
@endsection

