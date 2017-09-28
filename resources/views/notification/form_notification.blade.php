@extends('layouts.lte')
@section('content')
    <section class="content-header">
        <h1>
            Notifications
            <small>Create new</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-bell-o"></i> Notifications</a></li>
            <li class="active">Create</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create New Notification</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="POST" action="{{ route('notification.message.store') }}">
                        {{ csrf_field() }}
                        <!-- text input -->
                            <div class="form-group">
                                <label>Notification Title</label>
                                <input name="title" value="Portugal vs. Denmarks" type="text" class="form-control" placeholder="Notification Title">
                            </div>
                            <div class="form-group">
                                <label>Notification Link Action</label>
                                <input name="url_action" value="http://localhost/curl/" type="text" class="form-control" placeholder="Notification Link Action">
                                <input name="icon" value="firebase-logo.png" type="hidden" class="form-control" placeholder="Notification Link Action">
                            </div>
                            <div class="form-group">
                                <label>Current Device</label>
                                <input name="device_id" type="text" readonly class="form-control" value="{{ $device_id }}">
                            </div>
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Notification Body</label>
                                <textarea name="body" class="form-control" rows="3" placeholder="Notification Body">5 to 10</textarea>
                            </div>
                            <div class="form-group">
                                <label>Push notification after (Minute)</label>
                                <input name="push_time" type="number" min="0" class="form-control" placeholder="Minute">
                            </div>                            
                            <!-- /.box-body -->
                            <div class="">
                                <button type="submit" class="btn btn-success pull-right">Create New Notification</button>
                            </div>

                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection
