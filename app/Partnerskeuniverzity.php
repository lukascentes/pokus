<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partnerskeuniverzity extends Model
{
    protected $table = 'partnerskeuniverzity';

    protected $fillable = [
        'stat','nazov','adresa'
    ];
}