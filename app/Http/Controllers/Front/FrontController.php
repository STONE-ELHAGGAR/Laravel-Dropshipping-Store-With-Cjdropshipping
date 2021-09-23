<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //Constructor
    Public function __construct(){
        //Test Second Commit
    }
    Public function index(){
        return view('welcome');
    }
    Public function cart(){
        return view('cart');
    }
    Public function about_us(){
        return view('about-us');
    }
}
