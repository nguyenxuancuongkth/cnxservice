@extends('layouts.lte')
@section('content')
    <section class="content-header">
        <h1>
            List Of Notifications
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-bell-o"></i> Notifications</a></li>
            <li class="active">List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">List Of Notifications</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Description</th>
                                <th>Group</th>
                                <th>Topic</th>
                                <th>Status</th>
                            </tr>
                            @foreach ($devices as $device)
                                <tr>
                                    <td>{{ $device->id }}</td>
                                    <td>{{ $device->id }}</td>
                                    <td>{{ $device->id }}</td>
                                    <td>{{ $device->name }}</td>
                                    <td>
                                        <span class="label label-success">Approved</span>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        {{ $devices->links() }}
                    </div>

                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->


    </section>
@endsection
