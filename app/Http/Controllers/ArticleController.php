<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;

class ArticleController extends Controller
{
    //
    public function index() {
        $data = article::get();
        return view('/home')->with('data',$data);
    }
}
