<?php

namespace App\Http\Controllers\Firebase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Eloquent\Firebase\Server;

class ServerController extends Controller
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
    public function create()
    {
        //
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
        $server = new Server();
        $server->apiKey = 'device';
        $server->authDomain = 'dskfj';
        $server->databaseURL = 'device';
        $server->projectId = 'device';
        $server->storageBucket = 'device';
        $server->messagingSenderId = 'device';
        $server->serverKey = 'AAAATPcnxFw:APA91bHxurlWvn-cfZ_ubZMpIpOiTIv0rE4352DH96Ni21lN6v8w949o2UVHdzjg9WBp4nSlAD9cwJNxwhzKLsCbJSHCnlOA6r4HfkTBHaQM_Sc5Y9sSmJAkBw4hisESLNzFjsmE1HXu';
        $server->save();
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
