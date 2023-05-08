<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  
    public function acceso(){
        return view('entradas.acceso');
    }

    public function login(Request $request){
      
       /* $credenciales= [
            'email'=> $request->email,
            'password' => $request->password,
        ];
       // $recuerdame = ($request->has('recuerdame') ? true : false);
        if(Auth::attempt($credenciales)){
            $request->session()->regenerate();
            return redirect()->route('entradas.index');
        }else{

            return redirect()->route('entradas.acceso');
        }*/
        $entradas=Usuario::all();
        $email= $request->email;
        $password= $request->password;
        $emailbd[]="";
        $passwordbd[]="";
        $cadena="";
        $error="";
      
       foreach($entradas as $d){
        $emailbd['email']= $d['email'];
        $passwordbd['password']= $d['password'];

        
        if ($email == $emailbd["email"] && $password==$passwordbd["password"]) {
            $request->session()->put(['email'=>$email]);
            $request->session()->regenerate();
            $cadena= redirect()->intended(route('entradas.index'));
          
        } else{
            $error= redirect()->route('entradas.acceso');
        }
    

       }

       if (!empty($cadena)) {
            return $cadena;
        } else{
            return $error;
        }

    }

    public function logout(Request $request){

       Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route('entradas.acceso'); 
    }


}
