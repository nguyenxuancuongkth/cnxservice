<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DeviceSubcription extends Model
{
    use Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notification_device_subcription';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token', 'server_id', 'website_id'
    ];
    /**
     * Get the post that owns the comment.
     */
    public function server()
    {
        return $this->belongsTo('App\Model\FirebaseServer', 'server_id','id');
    }      
}
