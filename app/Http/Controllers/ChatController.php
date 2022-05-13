<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Message;
use App\Models\User;
use App\Notifications\MyFirstNotification;
use Illuminate\Support\Facades\Notification;


class ChatController extends Controller
{
    public function message(Request $request)
    {
        event(new Message($request->username, $request->message));
        return [];
    }

    public function sendNotification()
    {
        $user = User::first();

        $details = [
            'greeting' => 'Hi Artisan',
            'body' => 'This is my first notification from ItSolutionStuff.com',
            'thanks' => 'Thank you for using ItSolutionStuff.com tuto!',
            'actionText' => 'View My Site',
            'actionURL' => url('/'),
            'order_id' => 101
        ];

        
        Notification::send($user, new MyFirstNotification($details));

    }
}
