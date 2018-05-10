<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tradition extends Model
{
    public function images(){
 		return $this->hasMany('App\Image');   	
    }
    
    public function paragraphs(){
 		return $this->hasMany('App\Paragraph');   	
    }

    public function types(){
 		return $this->has('App\Type');   	
    }
}