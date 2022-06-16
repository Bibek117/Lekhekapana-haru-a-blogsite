<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class OpenauthController extends Controller
{
    //open auth for facebook
    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function loginFacebook()
    {
        try{
             $facebookUser = Socialite::driver('facebook')->stateless()->user();
        $user = User::firstOrCreate([
            'oauth_id' => $facebookUser->id],
            ['name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'password' => Hash::make('Password123')],
        );
        Auth::login($user);
        return redirect('/admin/dashboard')->with('status', 'Logged in successfully');
        }catch(Exception $err){
            @dd($err);
        }
       
    }

    //open auth for gmail

    public function redirectGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function loginGoogle()
    {
        try{
            $gmailUser = Socialite::driver('google')->stateless()->user();
            $user  =  User::where('oauth_id',$gmailUser->id)->first();
       $user = User::firstOrCreate([
           'oauth_id' => $gmailUser->id],
           ['name' => $gmailUser->name,
           'email' => $gmailUser->email,
           'password' => Hash::make('Password123')],
       );
       Auth::login($user);
       return redirect('/admin/dashboard')->with('status', 'Logged in successfully');


       }catch(Exception $err){
           @dd($err);
       }
    }
}
