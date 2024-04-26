<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function index()
   {
        $user = Auth::user();

        if ($user){
            if ($user->level_id == 1) {

                return redirect()->intended('admin');
            }
            else if ($user->level_id == 2) {
                return redirect()->intended('manager');
            }
        }
        return view('login');
   }



public function proses_login(Request $request)
{
    $request -> validate([
        'username' => 'required',
        'password' => 'required',
    ]);


    $credential = $request->only('username','password');

    if (Auth::attempt($credential)) {

        $user = Auth::user();
        if ($user->level_id == 1) {
            return redirect()->intended('admin');
        }
        else if ($user->level_id == 2) {
            return redirect()->intended('manager');
        }

        return redirect()->intended('/');
    }

    return redirect('login')->with('error','Username atau Password Salah');
}


//register
public function register()
{
    return view('register');

}

//action register
public function proses_register(Request $request)
{
    $validator::make($request->all(),[
       'nama' => 'required',
         'username' => 'required|unique:m_user',
            'password' => 'require',
    ]);

    if ($validator->fails()) {
        return redirect('register')->with('error',$validator->errors());
    }

    $request['level_id'] = 2;
    $request['password'] = hash::make($request->password);

    m_user::create($request->all());

    return redirect('login')->with('success','Register Berhasil');
}

//logout
public function logout()
{
    $request->session()->flush();
    Auth::logout();
    return redirect('login');


}
}

