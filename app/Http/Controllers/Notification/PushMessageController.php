<?php

namespace App\Http\Controllers\Notification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\Model\NotificationMessage;
use App\Model\DeviceSubcription;

class PushMessageController extends Controller
{
    /**
     * Call here to push notificaiton
     */    
    public function pushMessage($id)
    {
        $notification = NotificationMessage::findOrFail($id);
        $this->send($notification);
    }
    /**
     * Set body content to push notification
     */    
    public function getBody($notification) {
        $message = array(
            'notification' => array(
                'title' => $notification->title,
                'body' => $notification->body,
                'icon' => $notification->icon,
                'click_action' => $notification->url_action
            ),
            'to' => $notification->device->token
        );
        return json_encode($message);    	
    }
    /**
     * Send a notification message
     * To send a notification to a specific device
     */
    public function send($notification)
    {
        $client = new Client();
        $client->request('POST', 'https://fcm.googleapis.com/fcm/send', [
            'headers' => [
                'Authorization' => sprintf('key=%s', $notification->device->server->serverKey),
                'Content-Type' => 'application/json'
            ],
            'body' => $this->getBody($notification)
        ]);
    }    
}
