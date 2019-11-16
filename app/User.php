<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model

{


    protected $table = 'users';



    protected $fillable = [
        'first_name', 'last_name','user_name', 'vek',
    ];


}
