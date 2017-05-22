<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    //


    public function categor(){
        return $this->belongsToMany('App\categor','categor_article', 'article.id','categor');
    }
}
