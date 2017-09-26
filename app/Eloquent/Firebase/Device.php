<?php

namespace App\Eloquent\Firebase;

use Illuminate\Database\Eloquent\Model;
use App\Eloquent\Firebase\Server as Server;
use Illuminate\Notifications\Notifiable;

class Device extends Model
{
    use Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'firebase_cloud_message_device';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'token_id', 'user_id','server_id'
    ];
    /**
     * Get the post that owns the comment.
     */
    public function server()
    {
        return $this->belongsTo('App\Eloquent\Firebase\Server');
    }
}
