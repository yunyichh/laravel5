<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Routing\Route;

class UserController extends Controller
{
    public function index(){
        echo "haha";
        echo  "hello laravel5";
    }
    public function user(){
        echo "user";
    }
}
