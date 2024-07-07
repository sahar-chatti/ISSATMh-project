<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   
    public function home(){
        return  view ('frontend.home', [ 'page'=>'Home']);
    }

    public function  index() {
    return view('frontend.index');
}
    public function about(){
        return  view ('frontend.about', ['page'=>'About']);
    }
    public function aboutUs(){
        return  view ('frontend.about-us', ['page'=>'AboutUs']);
    }

    public function contact(){
        return  view ('frontend.contact', [ 'page'=>'Contact']);
    }

    public function service(){
        return  view ('frontend.service', [ 'page'=>'Service']);
    }

    public function Team(){
        return  view ('frontend.Team', [ 'page'=>'Team']);
    }
}
