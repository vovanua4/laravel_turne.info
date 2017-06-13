<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\categor;
use App\sity;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $template = false;
    public $value = [];

    public function render(){

        $this->assign('categors' , categor::all());
        $this->assign('sity' , sity::all());
//        dd($this->template);
        return view($this->template , $this->value);
    }


    public function assign($name , $value){
        $this->value[$name] = $value;
    }
}
