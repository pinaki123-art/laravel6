<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function show()
    {

        return view('notifications.show', [
            'notifications' => tap(auth()->user()->unreadNotifications)->markAsRead()
        ]);

        /*$notifications = auth()->user()->unreadNotifications;

        
            $notifications->markAsRead();
        

        return view('notifications.show', [
            'notifications' => $notifications
        ]);*/
    }
}
