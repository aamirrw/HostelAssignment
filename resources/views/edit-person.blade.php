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
                    Edit Person
                </div>
                <div class="panel-body">

                    <form role="form" method="POST" action="/person/{{$person->id}}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Enter Name</label>
                            <input class="form-control" type="text" name="name" value="{{$person->name}} ">

                        </div>

                        <div class="form-group">
                            <label>Enter CNIC</label>
                            <input class="form-control" type="text" name="cnic" value="{{$person->cnic}}">
                        </div>

                        <div class="form-group">
                            <label>Enter Phone</label>
                            <input class="form-control" type="text" name="phone" value="{{$person->phone}}">
                        </div>

                        <div class="form-group">
                            <label>Enter Address</label>
                            <input class="form-control" type="text" name="address" value="{{$person->address}}">
                        </div>
                         <button type="submit" name="submitt" class="btn btn-info">Submit </button>

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