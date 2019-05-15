<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function mid(Request $request,$param){
        dump($request);
        echo  'show'.$param;
        br();
        echo response()->json(['hello','controller']);
    }
    public function request(Request $request){
        dump($request);
        dump($request->all());
        echo $request->path();br();
        echo $request->url();br();
        echo $request->fullUrl();br();
        dump($request->isMethod('get'));
        dump($request->query());//get
        dump($request->post());//post
        dump($request->input());//http all
        dump($request->a);//通过动态属性获取输入
    }
}
