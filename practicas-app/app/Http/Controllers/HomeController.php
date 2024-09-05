<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class HomeController extends Controller
{
    //
    public function show(){
        return view("web_site.apis");
    }

    public function get($nombre){
        return view("web_site.get", compact("nombre"));
    }

    public function main(){
        return view("web_site.main");
    }
}
