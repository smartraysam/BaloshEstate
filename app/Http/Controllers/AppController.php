<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function login(){
        return view('auth.mobile.login');
    }


    public function register(){
        return view('auth.mobile.register');
    }


    public function verify(){
        return view('auth.mobile.verify');
    }


    public function welcome(){
        return view('pages.mobile.welcome');
    }


    public function home(){
        return view('pages.mobile.home');
    }


    public function bills(){
        return view('pages.mobile.bills');
    }

    public function bills_payment(){
        return view('pages.mobile.bills-payment');
    }



    public function visitor(){
        return view('pages.mobile.visitor');
    }


    public function req_history(){
        return view('pages.mobile.request-history');
    }



    public function profile(){
        return view('pages.mobile.profile');
    }



    public function menu(){
        return view('pages.mobile.menu');
    }




    public function message(){
        return view('pages.mobile.message');
    }


    public function emergency(){
        return view('pages.mobile.emergency');
    }



    public function space(){
        return view('pages.mobile.space');
    }





}
