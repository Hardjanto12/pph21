<?php

namespace App\Http\Controllers;

use App\Models\mUser;
use App\Models\Mac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class loginController extends Controller
{


    public function index()
    {
        // PHP code to get the MAC address of Server
        $MAC = exec('getmac');
        // Storing 'getmac' value in $MAC
        $MAC = strtok($MAC, ' ');
        session()->put('mac', $MAC);
        // echo $MAC;

        $title = "Login Page";
        return view('auth.partials.login', ['title' => $title]);
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }

    public function authenticate(Request $request)
    {

        // get session mac
        $mac = session()->get('mac');
        //get mac from db
        $macdb = Mac::where('mac', '=', $mac)->exists();
        //cek
        if ($macdb == 1) {
            // try {
            $validated = $request->validate([
                'muserName' => 'required',
                'muserPwd' => 'required'
            ]);


            // print_r($validated);
            $isAuth = Auth::attempt(
                [
                    'muserName' => $validated['muserName'],
                    'password' => $validated['muserPwd']
                ]
            );

            if ($isAuth) {
                return redirect('home');
            } else {
                return back()->withErrors([
                    'muserName' => 'Username atau password salah!',
                ])->onlyInput('muserName');
            }
        } else {
            return back()->withErrors([
                'mac' => 'Perangkat tidak terdaftar',
            ])->onlyInput('muserName');
        }
    }
}
