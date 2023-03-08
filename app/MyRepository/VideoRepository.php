<?php

namespace App\MyRepository;

use App\MyInterface\VideoInterface;
use App\Models\Video;


class VideoRepository implements VideoInterface{

    public function topViewVideo(){
      return   Video::with(array('hitcounter'=>function($query){
            $query->orderBy('raw_hits', 'DESC');
        }))->take(10)->get();
    }

}