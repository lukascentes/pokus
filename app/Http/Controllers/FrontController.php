<?php
/**
 * Created by PhpStorm.
 * User: 3gali
 * Date: 05.11.2019
 * Time: 10:04
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class FrontController extends Controller
{
    public function index(){
        return view('frontView.home.homeContent');
    }

    public function registration(){
    return view('frontView.home.registrationForm');
}

    public function login()
    {
        return view('frontView.home.loginForm');
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('successlogin');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function successlogin()
    {
        return view('frontView.prihlaseny.master_prihlaseny');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


    public function pobyty(){
        return view('frontView.home.studijnepobyty');
    }

    public function work(){
        return view('frontView.home.work');
    }

    public function spravy(){
        return view('frontView.home.spravy');
    }

    public function sprava1(){
        return view('frontView.home.sprava.sprava1');
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

    public function master_prihlaseny()
    {
        return view('frontView.prihlaseny.master_prihlaseny');
    }

    public function studijnepobyty_prihlaseny()
    {
        return view('frontView.prihlaseny.studijnepobyty_prihlaseny');
    }

    public function work_prihlaseny()
    {
        return view('frontView.prihlaseny.work_prihlaseny');
    }

    public function spravy_prihlaseny()
    {
        return view('frontView.prihlaseny.spravy_prihlaseny');
    }

    public function odhlasit_prihlaseny()
    {
        return view('frontView.prihlaseny.odhlasit_prihlaseny');
    }

    public function usa_prihlaseny(){
        return view('frontView.prihlaseny.stays_prihlaseny.usa_prihlaseny');
    }

    public function kazachstan_prihlaseny(){
        return view('frontView.prihlaseny.stays_prihlaseny.kazachstan_prihlaseny');
    }

    public function malajzia_prihlaseny(){
        return view('frontView.prihlaseny.stays_prihlaseny.malajzia_prihlaseny');
    }

    public function rusko_prihlaseny(){
        return view('frontView.prihlaseny.stays_prihlaseny.rusko_prihlaseny');
    }

    public function britain_prihlaseny(){
        return view('frontView.prihlaseny.stays_prihlaseny.britain_prihlaseny');
    }

    public function hong_kong_prihlaseny(){
        return view('frontView.prihlaseny.stays_prihlaseny.hong_kong_prihlaseny');
    }

    public function taiwan_prihlaseny(){
        return view('frontView.prihlaseny.stays_prihlaseny.taiwan_prihlaseny');
    }

    public function polsko_prihlaseny(){
        return view('frontView.prihlaseny.stays_prihlaseny.polsko_prihlaseny');
    }

    public function cina_prihlaseny(){
        return view('frontView.prihlaseny.stays_prihlaseny.cina_prihlaseny');
    }


}