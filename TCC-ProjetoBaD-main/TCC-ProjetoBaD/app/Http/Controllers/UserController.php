<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
{
    public function login(){

        return view('authentication.login');
    
    }
    public function authenticate(Request $request ){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerateToken();
            return redirect('/turma');
        }
        return back()->withErrors(['failed'=>"Usuário/Senha Inválidos!",'teste'=>$request->email]);

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function index(){
        return view('turma.create');
    }
    
    public function createUser(){
        return view('authentication.createUser');
    }

    public function store(Request $request){
        
        if($request->password == $request->passconfirmation){
            $user = new User;
            $password = bcrypt($request->password);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $password;
            $user->save();
    
            return redirect('/')->with('msg','Usuario Criado com Sucesso!');
        }
        return back()->with('msg','As senhas não coincidem')->withInput();
    }
}
