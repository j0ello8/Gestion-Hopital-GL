<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChatForum;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\Auth;
use App\Events\NewChatMessage;


class ChatController extends Controller
{
    public function rooms(Request $request){
        return ChatForum::all();
    }

    public function messages(Request $request, $roomid ){
        return ChatMessage::where('chat_room_id', $roomid)
        ->with('user')
        ->orderBy('created_at', 'DESC')
        ->get();
    }

    public function newMessage( Request $request, $roomId){
        $newMessage = new ChatMessage;
        $newMessage->user_id = Auth::id();
        $newMessage->chat_room_id = $roomId;
        $newMessage->message = $request->message;
        $newMessage->save();

        broadcast(new NewChatMessage( $newMessage))->toOthers();

        return $newMessage;
    }
}
