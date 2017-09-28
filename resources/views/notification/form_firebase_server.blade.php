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
                        <h3 class="box-title">Create New Firebase Server</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="POST" action="{{ route('notification.firebase.server.store') }}">
                        {{ csrf_field() }}
                        <!-- text input -->
                            <div class="form-group">
                                <label>apiKey</label>
                                <input name="apiKey" value="" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>authDomain</label>
                                <input name="authDomain" value="" type="text" class="form-control">
                            </div>    
                            <div class="form-group">
                                <label>databaseURL</label>
                                <input name="databaseURL" value="" type="text" class="form-control">
                            </div> 
                            <div class="form-group">
                                <label>projectId</label>
                                <input name="projectId" value="" type="text" class="form-control">
                            </div> 
                            <div class="form-group">
                                <label>storageBucket</label>
                                <input name="storageBucket" value="" type="text" class="form-control">
                            </div> 
                            <div class="form-group">
                                <label>messagingSenderId</label>
                                <input name="messagingSenderId" value="" type="text" class="form-control">
                            </div> 
                            <div class="form-group">
                                <label>serverKey</label>
                                <input name="serverKey" value="" type="text" class="form-control">
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
