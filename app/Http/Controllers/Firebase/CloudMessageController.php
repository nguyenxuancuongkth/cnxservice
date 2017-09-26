<?php

namespace App\Http\Controllers\Firebase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class CloudMessageController extends Controller
{
    // FIREBASE SERVER KEY TOKEN
    private $serverKey;
    // DEVICE REGISTRATION TOKEN
    private  $deviceToken;
    // DEVICE URL
    private $deviceURL;
    // Notification Title
    private $notificationTitle;
    // Notification Body
    private $notificationBody;
    // Notification Icon
    private $notificationIcon;
    // Const
    const DEFAULT_API_URL = 'https://fcm.googleapis.com/fcm/send';
    const DEFAULT_TOPIC_ADD_SUBSCRIPTION_API_URL = 'https://iid.googleapis.com/iid/v1:batchAdd';
    const DEFAULT_TOPIC_REMOVE_SUBSCRIPTION_API_URL = 'https://iid.googleapis.com/iid/v1:batchRemove';

    /**
     * CloudMessageController constructor.
     */
    public function __construct()
    {
        $this->setServerKey();
        $this->setDeviceToken();
        $this->setDeviceURL();
        $this->setNotificationTitle();
        $this->setNotificationBody();
        $this->setNotificationIcon();
    }

    /**
     * GET FIREBASE SERVER KEY TOKEN
     * @return mixed
     */
    public function getServerKey()
    {
        return $this->serverKey;
    }

    /**
     * SET FIREBASE SERVER KEY TOKEN
     * @return void
     */
    public function setServerKey()
    {
        $this->serverKey = 'AAAATPcnxFw:APA91bHxurlWvn-cfZ_ubZMpIpOiTIv0rE4352DH96Ni21lN6v8w949o2UVHdzjg9WBp4nSlAD9cwJNxwhzKLsCbJSHCnlOA6r4HfkTBHaQM_Sc5Y9sSmJAkBw4hisESLNzFjsmE1HXu';
    }

    /**
     * GET DEVICE REGISTRATION TOKEN
     * @return mixed
     */
    public function getDeviceToken()
    {
        return $this->deviceToken;
    }

    /**
     * SET DEVICE REGISTRATION TOKEN
     * @return void
     */
    public function setDeviceToken()
    {
        $this->deviceToken = 'cbBCYVxAWH8:APA91bFj1IjvS-aDiTYU1HHwKjBVAeTuC5M7b_wHj3bGmXC3KYYBkLFrMNaQBre8gItskWw9cUCH58a3vBkPo4LDcqFC0ckeWS3dKlcqfBFEbUXEQUiA3h7Fm_8K9fkOvoZ69SHyY63I';
    }
    public function getDeviceURL() {
        return $this->deviceURL;
    }
    public function setDeviceURL() {
        $this->deviceURL = 'http://localhost:8081';
    }
    public function getNotificationTitle() {
        return $this->notificationTitle;
    }
    public function setNotificationTitle() {
        $this->notificationTitle = 'Portugal vs. Denmarks';
    }
    public function getNotificationBody() {
        return $this->notificationBody;
    }
    public function setNotificationBody() {
        $this->notificationBody = '5 to 10';
    }
    public function getNotificationIcon() {
        return $this->notificationIcon;
    }
    public function setNotificationIcon() {
        $this->notificationIcon = 'firebase-logo.png';
    }



    public function getFireBaseBodyRequest() {
        $message = array(
            'notification' => array(
                'title' => $this->getNotificationTitle(),
                'body' => $this->getNotificationBody(),
                'icon' => $this->notificationIcon,
                'click_action' => $this->deviceURL
            ),
            'to' => $this->deviceToken,
        );
        return json_encode($message);
    }

    /**
     * Send a notification message
     * To send a notification to a specific device
     */
    public function send()
    {
        $client = new Client();
        $res = $client->request('POST', 'https://fcm.googleapis.com/fcm/send', [
            'headers' => [
                'Authorization' => sprintf('key=%s', $this->serverKey),
                'Content-Type' => 'application/json'
            ],
            'body' => $this->getFireBaseBodyRequest()
        ]);
    }

    public function test() {
        echo '<pre>';
        echo $this->getFireBaseBodyRequest();
        echo '</pre>';
    }
}
