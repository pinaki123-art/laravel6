<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;


class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply)

    {
    	/*if (Gate::denies('update-conversation', $reply->conversation)) {

    	}*/

        $this->authorize('update', $reply->conversation);

        $reply->conversation->setBestReply($reply);
        return back();
    }
}
w
