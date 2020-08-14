<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed conversation
 */
class Reply extends Model
{
    //

    public  function conversation()
    {
    	return $this->belongsTo(User::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }


}
