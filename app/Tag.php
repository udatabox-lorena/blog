<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";

    protected $fillable = ['name'];

    public function articulos(){
    	return $this->belongsToMany('App\Articulo')->withTimestamps();
    }
}
