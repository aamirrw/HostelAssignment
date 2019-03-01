@extends('layouts.layout')
@section('title','Add Room')

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
                    Edit Room
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="/room/{{$room->id}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Enter Name</label>
                            <input class="form-control" type="text" name="name" value="{{$room->name}}">

                        </div>

                        <div class="form-group">
                            <label>Enter Capacity</label>
                            <input class="form-control" type="number" name="capacity" value="{{$room->capacity}}">
                        </div>

                        <div class="form-group">
                            <label>Room Status</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" id="status" value="Furnished">Furnished
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="status" id="status" value="Non Furnished">Non Furnished
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Room Has A/C?</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="has_ac" id="has_ac" value=" yes">Yes
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="has_ac" id="has_ac" value="No">No
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Room Has Multimedia?</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="has_multimedia" id="has_multimedia" value="yes">Yes
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="has_multimedia" id="has_multimedia" value="No">No
                                </label>
                            </div>
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