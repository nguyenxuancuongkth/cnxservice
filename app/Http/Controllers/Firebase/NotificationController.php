<?php

namespace App\Http\Controllers\Firebase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Eloquent\Firebase\Notification;


class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $device = Notification::paginate(15);
        $response = array(
            'devices' => $device
        );
        return view('notification.list', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $response = array(
            'device_id' => $id
        );
        return view('notification.device.form', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request...
        $notification = new Notification();
        $notification->name = $request->input('name', null);
        $notification->title = $request->input('title', null);
        $notification->body = $request->input('body', null);
        $notification->icon = $request->input('icon', null);
        $notification->url = $request->input('url', null);
        $notification->device_id = $request->input('device_id', null);
        $notification->group_id = $request->input('group_id', null);
        $notification->topic_id = $request->input('topic_id', null);
        $notification->save();
        return redirect()->route('notification.device.message.create', ['id' => $request->input('device_id', null)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
