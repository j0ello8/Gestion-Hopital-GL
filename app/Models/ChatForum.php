<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatForum extends Model
{
    use HasFactory;

    public function messages(){
        return $this->hasMany('App\Models\ChatMessage');
    }
}
