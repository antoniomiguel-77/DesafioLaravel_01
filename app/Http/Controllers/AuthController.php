<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\{LoginRequest,RegisterRequest};
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
     

    /** Formulario de Login */
    public function loginForm ()
    {
        try {
            
            return view("pages.form_login");
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
    /** Ação do Formulario de Login */
    public function login (LoginRequest $request)
    {
        try {

            $credential = ["email"=>$request->email,"password"=>$request->password];

            if(Auth::attempt($credential,$request->remember))
            {
                return redirect()->to("index");

            }else{
                
                return redirect()->back()->with("message","Email ou Senha Inválida");
            }

            
            
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back();
        }
    }
    /** Formulario de Registro de usuarios */
    public function registerForm()
    {
        try {
            
            return view("pages.form_register");
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
    /** Ação do  Formulario de Registro de usuarios */
    public function register(RegisterRequest $request)
    {
        try {

        
           $isTrue = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>\Hash::make($request->password),
            ]);

            if ($isTrue) {
                return redirect('/');
            }
            
            
        } catch (\Throwable $th) {
            
            return redirect()->back();
        }
    }
}
