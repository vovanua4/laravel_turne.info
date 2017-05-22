<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categor extends Model
{
//    protected $table = 'categors'
    
 


public function article(){
    return $this->belongsToMany('App\article');
}

}
