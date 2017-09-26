<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class NotificationController extends Controller
{
    // YOUR-SERVER-KEY
    public $serverKey = 'AAAATPcnxFw:APA91bHxurlWvn-cfZ_ubZMpIpOiTIv0rE4352DH96Ni21lN6v8w949o2UVHdzjg9WBp4nSlAD9cwJNxwhzKLsCbJSHCnlOA6r4HfkTBHaQM_Sc5Y9sSmJAkBw4hisESLNzFjsmE1HXu';
    public $clientKey = 'cbBCYVxAWH8:APA91bFj1IjvS-aDiTYU1HHwKjBVAeTuC5M7b_wHj3bGmXC3KYYBkLFrMNaQBre8gItskWw9cUCH58a3vBkPo4LDcqFC0ckeWS3dKlcqfBFEbUXEQUiA3h7Fm_8K9fkOvoZ69SHyY63I';

    public function __construct()
    {

    }

    public function test()
    {
        $client = new Client();
        $message = array(
            'notification' => array(
                'title' => 'Portugal vs. Denmarks',
                'body' => '5 to 1',
                'icon' => 'firebase-logo.png',
                'click_action' => 'http://localhost:8081'
            ),
            'to' => $this->clientKey,
        );
//        echo (sprintf('key=%s', $this->apiKey));
//        exit;
//        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'https://fcm.googleapis.com/fcm/send', [
            'headers' => [
                'Authorization' => sprintf('key=%s', $this->serverKey),
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($message)
        ]);
    }

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
