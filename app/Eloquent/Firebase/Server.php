<?php

namespace App\Eloquent\Firebase;

use Illuminate\Database\Eloquent\Model;
use App\Eloquent\Firebase\Device;
use Illuminate\Notifications\Notifiable;

class Server extends Model
{
    use Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'firebase_cloud_message_server';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'apiKey', 'authDomain', 'databaseURL','projectId','storageBucket',
        'messagingSenderId','serverKey'
    ];
    /**
     * Get the device for the server.
     */
    public function devices()
    {
        return $this->hasMany('App\Eloquent\Firebase\Device');
    }
}
