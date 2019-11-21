<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class destinations extends Model

{


    protected $table = 'univerzity';



    protected $fillable = [
        'stat', 'typ','zakladne_info', 'vyhlasenie_kto',
    ];


}
