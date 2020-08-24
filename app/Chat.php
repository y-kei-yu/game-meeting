<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'game_name' => 'required',
        'number' => 'required',
        'comment' => 'required',
    );
}
