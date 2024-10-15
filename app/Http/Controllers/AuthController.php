<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function welcome(){
        return view('welcome');
    }

    public function grab_data(Request $request){
        $languages = $request->has('LSpoken') ? implode(', ', $request->LSpoken) : '';
        session([
            'Fname' => $request -> Fname,
            'Lname' => $request -> Lname,
            'Gender' => $request -> gender,
            'Nationality' => $request -> nationality,
            'Language' => $languages,
            'Biodata' => $request -> Bio,
        ]);
        return redirect() -> route('Ke Welcome');
    }
}
