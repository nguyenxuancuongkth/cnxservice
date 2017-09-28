<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class NotificationMessage extends Model
{
    use Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notification_message';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'icon','url_action','push_time',
        'status','device_id'
    ];
    /**
     * Get the post that owns the comment.
     */
    public function device()
    {
        return $this->belongsTo('App\Model\DeviceSubcription', 'device_id','id');
    }    
}
