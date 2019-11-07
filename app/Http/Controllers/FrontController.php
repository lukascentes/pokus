<?php
/**
 * Created by PhpStorm.
 * User: 3gali
 * Date: 05.11.2019
 * Time: 10:04
 */

namespace App\Http\Controllers;


class FrontController extends Controller
{
    public function index(){
        return view('frontView.home.homeContent');
    }

    public function registration(){
    return view('frontView.home.registrationForm');
}
    public function login(){
        return view('frontView.home.loginForm');
    }

    public function pobyty(){
        return view('frontView.home.studijnepobyty');
    }

    public function work(){
        return view('frontView.home.work');
    }

    public function usa(){
        return view('frontView.home.stays.usa');
    }

    public function gallery(){
        return view('frontView.home.gallery');
    }

    public function kazachstan(){
        return view('frontView.home.stays.kazachstan');
    }

    public function malajzia(){
        return view('frontView.home.stays.malajzia');
    }

    public function rusko(){
        return view('frontView.home.stays.rusko');
    }

    public function britain(){
        return view('frontView.home.stays.britain');
    }

    public function hong_kong(){
        return view('frontView.home.stays.hong_kong');
    }

    public function taiwan(){
        return view('frontView.home.stays.taiwan');
    }

    public function polsko(){
        return view('frontView.home.stays.polsko');
    }

    public function cina(){
        return view('frontView.home.stays.cina');
    }

}