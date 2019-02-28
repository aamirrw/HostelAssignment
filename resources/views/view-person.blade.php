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
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($users as $user)


                        <tr>
                            <td> <?php echo $user->room_id; ?></td>
                            <td><?php echo $user->name; ?></td>
                            <td><?php echo $user->cnic; ?></td>
                            <td><?php echo $user->phone; ?></td>
                            <td> <?php echo $user->address; ?></td>
                            <td><?php echo $user->created_at; ?></td>
                            <td><?php echo $user->updated_at; ?></td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection