<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sity;
use DB;
use App\categor;
use App\article;

class MainContr extends Controller
{
    //
    
    public function index(){
//        $categor = new categor();
//        $categor->name = 'Море' ;
//        $categor->active = TRUE;
//        $categor->info = 'вода, солнышко, рыба , и т д';
//        $categor->save();
        $this->xlam();
        return view('index', $this->respons);
    }
    
    
    public function article($id){
        return $id;
    }
    
    public function articleAll(){
        $this->xlam();
        return view('articleList'  , $this->respons);
    }
    
    
    public function xlam(){
        $this->respons['categors'] = categor::all();
        $this->respons['sity'] = sity::all();
    }

    public function sity(){
$article = sity::all();

    }
    
    
}
