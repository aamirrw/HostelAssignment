@extends('layouts.layout')
@section('title','Add Person')

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{session('success')}}.
        </div>
    @endif
    <!-- /. ROW  -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Add Room
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="/person">
                        @csrf
                        <div class="form-group">
                            <label>Enter Name</label>
                            <input class="form-control" type="text" name="name">

                        </div>

                        <div class="form-group">
                            <label>Enter CNIC</label>
                            <input class="form-control" type="text" name="cnic">
                        </div>

                        <div class="form-group">
                            <label>Enter Phone</label>
                            <input class="form-control" type="text" name="phone">
                        </div>

                        <div class="form-group">
                            <label>Enter Address</label>
                            <input class="form-control" type="text" name="address">
                        </div>

                        <div class="form-group">
                            <label>Select Room</label>
                            <select class="form-control" name="room_id">
                                @foreach($rooms = App\Room::all() as $room)
                                <option value="{{$room->id}}">{{$room->name}}</option>
                                    @endforeach
                            </select>
                        </div>


                        <button type="submit" name="submit" class="btn btn-info">Submit </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/.ROW-->

    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->


@endsection