<?php

namespace App\Eloquent\Firebase;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Notification extends Model
{
    use Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'firebase_cloud_message_notification';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'icon','url','device_id',
        'group_id','topic_id'
    ];
    /**
     * Get the post that owns the comment.
     */
    public function device()
    {
        return $this->belongsTo('App\Eloquent\Firebase\Device');
    }
}
