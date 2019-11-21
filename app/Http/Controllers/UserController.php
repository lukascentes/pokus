<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAddUserForm(){

        return view ("frontView.admin.adduser");
    }



    public function insertAction(Request $request){

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $user_name = $request->input('user_name');
        $password = $request->input('password');
        $admin = $request->input('admin');
        $email = $request->input('email');

        $user = new User();
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->user_name = $user_name;
        $user->password = $password;
        $user->admin = $admin;
        $user->email = $email;
        $user->save();

        return view('frontView.admin.adduser');
    }

    public function showAllAction()
    {
        $users = User::all();
        return view("frontView.admin.uzivatelia", ['users' => $users]);

    }

    public function showAction($id)
    {
        $user = User::find($id);
        return view("frontView.admin.update", ['user'=>$user]);
    }

    public function updateAction($id, Request $request)
    {
        $user = User::where("id", "=", $id)->first();
        $user->update(["first_name" => $request->input('first_name'),
            "last_name"=> $request->input('last_name'),
            "user_name"=> $request->input('user_name'),
            "admin"=> $request->input('admin'),
            "email"=> $request->input('email')]);

        return redirect()->action('UserController@showAllAction');
    }

    public function deleteAction($id){
        $user = User::find($id);
        $user ->delete();

        return redirect()->action('FrontController@uzivatelia');
    }

}