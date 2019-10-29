<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //tablename 
    protected $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
