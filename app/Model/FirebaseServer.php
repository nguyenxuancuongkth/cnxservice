<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FirebaseServer extends Model
{
    use Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notification_firebase_server';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'apiKey', 'authDomain', 'databaseURL','projectId','storageBucket',
        'messagingSenderId','serverKey'
    ];
}
