<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function homepage(){
        return view("index");
    }
    function aboutpage(){
        return view("about");
    }
    function blogpage(){
        return view("blog");
    }
    function contactpage(){
        return view("contact");
    }
    function analyzepage(){
        return view("analyze");
    }
    function portfoliopage(){
        return view("portfolio");
    }
    function singlepotfoliopage(){
        return view("single-portfolio");
    }
    function singlepostpage(){
        return view("single-post");
    }
}
