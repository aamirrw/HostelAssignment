@extends('layouts.layout')
@section('title','view Person')

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
                Kitchen Sink
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Room id</th>
                            <th> Name</th>
                            <th>Cnic #</th>
                            <th>Phone</th>
                            <th> Address</th>

                            <th colspan="2" style="text-align: center;">Button</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($user as $user)


                        <tr>
                            <td> {{$user->room_id}} </td>
                            <td>{{$user->name}} </td>
                            <td>{{$user->cnic}}</td>
                            <td>{{$user->phone}} </td>
                            <td> {{$user->address}}</td>

                            <td><a class="btn btn-small btn-info" href="{{ URL::to('person/'.$user->id.'/edit') }}">Edit</a></td>
                            <td><a class="btn btn-small btn-info" href="{{ URL::to('/person/' . $user->id ) }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-room').submit();">Delete</a></td>
                            <form id="delete-room" action="person/{{$user->id}}" method="post">
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