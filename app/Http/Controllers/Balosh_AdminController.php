<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Balosh_AdminController extends Controller
{
    //

      public function adminRegister(){
        
        return view('auth.adminRegister');
      }


      public function adminLogin(){
        
        return view('auth.adminLogin');
      }


      public function adminVisitors(){
        
        return view('pages.admin.visit');
      }

      public function adminRevenue(){
        
        return view('pages.admin.revenue');
      }


      public function adminManagers(){
        
        return view('pages.admin.managerEstate');
      }


      public function adminEstate(){
        
        return view('pages.admin.Estates');
      }


      public function adminPower(){
        
        return view('pages.admin.power');
      }


      public function admin(){
        
        return view('pages.admin.home');
      }

}



