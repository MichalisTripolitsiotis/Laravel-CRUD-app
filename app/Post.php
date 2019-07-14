<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table ='posts';
    //P.K.
    protected $pk='id';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
