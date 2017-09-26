@extends('layouts.lte')
@section('content')
    <section class="content-header">
        <h1>
            Notifications
            <small>Devices list</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-bell-o"></i> Notifications</a></li>
            <li class="active">Devices</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Devices List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Website</th>
                                <th>Publisher</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($devices as $device)
                                <tr>
                                    <td>{{ $device->id }}</td>
                                    <td>{{ $device->name }}</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{!! route('notification.device.message.create',['id' => $device->id]) !!}" type="button" class="btn btn-success btn-flat">Create New Notification
                                        </a>
                                        <a href="{!! route('notification.list') !!}" class="btn btn-primary btn-flat">List Notification</a>
                                        <button type="button" class="btn btn-danger btn-flat">Unsubscribe</button>
                                        <button type="button" class="btn btn-info btn-flat">Topics</button>
                                        <button type="button" class="btn btn-primary btn-flat">Groups</button>

                                        <button type="button" class="btn btn-warning btn-flat">Success</button>
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
