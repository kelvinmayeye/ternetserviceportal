<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsSubscriber;
use App\Notifications\NewPosts;

use Illuminate\Support\Facades\Notifications;


class NotificationController extends Controller
{
    public function sendNotification(){

        $newssubscriber = NewsSubscriber::all();
        //return $newssubscriber->first();
        $details = [
            'body' => 'You Received a new Notification',
            'action'=>'Click Here To View Post',
            'url'=>url('/'),
            'Thankyou'=>'Thank you have a nice day'
        ];

        $newssubscriber->notify(new NewPosts($details));
        //Notification::send($newssubscriber, new NewPosts($details));
    dd('Done tayari');
    }
}
