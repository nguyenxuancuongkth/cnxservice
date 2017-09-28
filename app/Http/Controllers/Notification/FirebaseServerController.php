<?php

namespace App\Http\Controllers\Notification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\FirebaseServer;

class FirebaseServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notification.list_firebase_server');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notification.form_firebase_server');
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
        $server = new FirebaseServer();
        $server->apiKey = $request->input('apiKey', null);
        $server->authDomain = $request->input('authDomain', null);
        $server->databaseURL = $request->input('databaseURL', null);
        $server->projectId = $request->input('projectId', null);
        $server->storageBucket = $request->input('storageBucket', null);
        $server->messagingSenderId = $request->input('messagingSenderId', null);
        $server->serverKey = $request->input('serverKey', null);
        $server->save();
        return redirect()->route('notification.firebase.server.list');
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
