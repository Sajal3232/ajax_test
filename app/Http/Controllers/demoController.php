<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }
    public function servicesection(){
        return view('front-end.home.service');
    }
    public function contactsection(){
        return view ('front-end.home.contact');
    }
    public function savecontact(Request $request){
       return $request->all();
    }
}
