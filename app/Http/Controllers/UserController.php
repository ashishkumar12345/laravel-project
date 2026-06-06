<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User;

class UserController extends Controller
{
    public function getUser(){
       $users = User::with('getPost:user_id,id,title')->find(4);
       dd($users->getPost); 
    }
}
