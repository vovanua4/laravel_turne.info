<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\article;
use App\categor;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
class AdminMainContr extends Controller
{
    public function articleList(){
        $article = article::all();

        return view('admin/article/articleList', ['article'=>$article]);
    }

    public function main(){
        return view('admin/main');
    }
}
