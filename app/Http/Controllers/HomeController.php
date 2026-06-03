<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "Welcome to Home Page";
    }
    public function contact()
    {
        return "Welcome to contact page";
    }
    public function about()
    {
        return "Welcome to about page";
    }

}