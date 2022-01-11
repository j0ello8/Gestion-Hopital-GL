<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;

    public function forum(){
        return $this->hasOne('App\Models\ChatForum','id','chat_room_id');
    }
    public function user(){
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
