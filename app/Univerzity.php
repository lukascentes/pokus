<?php
/**
 * Created by PhpStorm.
 * User: 3gali
 * Date: 15.11.2019
 * Time: 15:16
 */

namespace App;


class University
{
    protected $table = 'univerzity';

    protected $fillable = [
        'stat','typ','popis','datum','zakladne_info','vyhlasenie','pred_odjazdom','po_navrate','mapa','image'
    ];
}