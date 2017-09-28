<?php

namespace App\Http\Controllers\Notification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\NotificationMessage;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = array(
            'device_id' => $id
        );
        return view('notification.form_notification', $data);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();

        // dd($input);

        // Validate the request...
        $notification = new NotificationMessage();
        $notification->title = $request->input('title', null);
        $notification->body = $request->input('body', null);
        $notification->icon = $request->input('icon', null);
        $notification->url_action = $request->input('url_action', null);
        $notification->device_id = $request->input('device_id', null);
        $notification->push_time = $this->getFutureTime($request->input('push_time', 0));
        $notification->save();
        return redirect()->route('notification.device.subcription.list');
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
    public function update($id)
    {
        $notification = NotificationMessage::find($id);

        $notification->status = 1;

        $notification->save();
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
    // Helper function
    public function getFutureTime($minute) {
        $now = time();
        $futureTime = $now + ($minute * 60);
        // $startDate = date('m-d-Y H:i:s', $now);
        // $endDate = date('m-d-Y H:i:s', $futureTime);
        return $futureTime;
//        dd(Carbon::now()->timestamp);
//        $time = Carbon::now();
//        $a = $this->getEndsAtAttribute($time);
//        echo $a;
//        dd();        
       
    }
}
