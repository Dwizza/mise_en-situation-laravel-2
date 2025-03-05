<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $count = User::count('id');
        return response([$count]);
    }
    public function login()
    {
        return view('login');
    }
    public function authLogin(Request $request)
    {
        $validated = $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if(Auth::attempt($validated)){
            return redirect('/');
        }
        return redirect('/login');
    }
    public function register(){
        $Roles = Role::all(); //select * from Roles
        return view('register',compact('Roles'));
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'role'=>'required',
            'password'=>'required',
        ]);
        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'role_id' =>$request->role,
            'password' =>Hash::make($request->password),

        ]);
        // insert into user ('name','email','role_id','password') VALUES (?,?,?,?)
        $user->save();
        return redirect('/login');
    }
}
