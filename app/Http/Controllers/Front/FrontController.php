<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //Constructor
    Public function __construct(){
        //
    }
    Public function index(){
        return view('welcome');
    }
    Public function cart($id = 0){
        $data = array();
        $data['id'] = $id;
        return view('cart',compact('data'));
    }
    Public function about_us(){
        return view('about-us');
    }
}
