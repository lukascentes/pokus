<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spravyadmin extends Model

{


    protected $table = 'blog';



    protected $fillable = [
        'nazov_univerzity', 'autor','email', 'studijny_odbor',
    ];


}
