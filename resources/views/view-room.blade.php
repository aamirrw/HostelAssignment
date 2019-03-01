@extends('layouts.layout')
@section('title','view Room')

@section('content')

    @if(session('success'))
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{session('success')}}.
        </div>
    @endif
    <div class="col-md-12">
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>

                            <th> Name</th>
                            <th>Capacity #</th>
                            <th>Status</th>
                            <th> Has acc</th>
                            <th> Has Multimedia</th>

                            <th colspan="2" style="text-align: center;">Button</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($user as $user)


                            <tr>

                                <td>{{$user->name}} </td>
                                <td>{{$user->capacity}}</td>
                                <td>{{$user->status}} </td>
                                <td> {{$user->has_ac}}</td>
                                <td> {{$user->has_multimedia}} </td>

                                <td><a class="btn btn-small btn-info" href="{{ URL::to('room/'.$user->id.'/edit') }}">Edit</a></td>
                                <td><a class="btn btn-small btn-info" href="{{ URL::to('/room/' . $user->id ) }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-room').submit();">Delete</a></td>
                                <form id="delete-room" action="room/{{$user->id}}" method="post">
                                    @csrf
                                    @method('DELETE')

                                </form>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection