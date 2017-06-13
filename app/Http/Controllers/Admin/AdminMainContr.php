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
        return view('admin/article/articleList', ['articles'=>$article]);
    }

    public function main(){
        return view('admin/main');
    }

    public function articleNew(Request $request){
        $articl = new  article;
        $articl->active =(bool)$request->active;
        $articl->title_ru = $request->title_ru;
        $articl->title_en = $request->title_en;
        $articl->html_ru = $request->html_ru;
        $articl->html_en = $request->html_en;
        $articl->user_id = 1;
        $articl->like = 0;
        $articl->coutViews = 0;
        if($articl->save()){
            return redirect()->route('articleList');
        }
        if ($request->isMethod('post')){

        }
        
    }


    public function articleNewViwe(){
        return view('admin/article/articleNew',[]);
    }

    public function articleEdit(Request $request,  $id){

        $oneArtical = article::find($id);
        if($oneArtical != null){
            return view('admin/article/articleEdit',['oneArtical'=>$oneArtical]);
        }else{
           return redirect()->route('articleList');
        }

    }

    public function articleDel(Request $request , $id){

        article::destroy($id);
        return redirect()->route('articleList');
    }

}
