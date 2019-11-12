<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    protected $fillable = [
        'nazov_univerzity','autor','zaciatok','koniec','studijny_odbor','strucny_popis','image'
    ];
}
