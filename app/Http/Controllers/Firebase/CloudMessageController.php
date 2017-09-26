<?php

namespace App\Http\Controllers\Firebase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\Eloquent\Firebase\Device;
use App\Eloquent\Firebase\Server;

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
    public function setServerKey($serverKey)
    {
        $this->serverKey = $serverKey;
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
    public function setDeviceToken($deviceToken)
    {
        $this->deviceToken = $deviceToken;
    }
    public function getDeviceURL() {
        return $this->deviceURL;
    }
    public function setDeviceURL($url) {
        $this->deviceURL = $url;
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

    public function sendMessageToSpecialDevice() {
        $id = 13;
        $device = Device::findOrFail($id);
        $this->setDeviceToken($device->token_id);
        $this->setServerKey($device->server->serverKey);
        $this->setDeviceURL($device->server->url);
        $this->send();
    }
}
