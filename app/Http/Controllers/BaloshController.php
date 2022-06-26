<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaloshController extends Controller
{
    //
    public function home(){
        
        return view('pages.home');
      }


      public function power(){
        
        return view('pages.power');
      }


      public function visitor(){
        
        return view('pages.visit');
      }


      public function serviceFee(){
        
        return view('pages.serviceFee');
      }


      public function registeredHome(){
        
        return view('pages.regHome');
      }

      public function messaging(){
        
        return view('pages.message');
      }

      public function transaction(){
        
        return view('pages.transaction');
      }

      public function bookspace(){
        
        return view('pages.bookspace');
      }

      public function emergency(){
        
        return view('pages.emergency');
      }

      public function Request(){
        
        return view('pages.request');
      }


      public function login(){
        
        return view('auth.login');
      }

      public function register(){
        
        return view('auth.register');
      }

      public function security(){
        
        return view('pages.security');
      }

      public function managerEstate(){
        
        return view('pages.managerEstate');
      }

      public function revenue(){
        
        return view('pages.revenue');
      }


      public function powerDetails(){
        
        return view('pages.powerDetails');
      }


      public function visitorDetails(){
        
        return view('pages.visitorDetails');
      }

      public function serviceFeeDetails(){
        
        return view('pages.serviceFeeDetails');
      }


      public function spaceDetails(){
        
        return view('pages.spaceDetails');
      }


      public function revenueDetails(){
        
        return view('pages.revenueDetails');
      }


      public function newMessage(){
        
        return view('pages.newMessage');
      }


      public function inbox(){
        
        return view('pages.inbox');
      }
}
