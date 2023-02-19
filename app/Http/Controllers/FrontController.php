<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Slider;
use  App\Models\Video;


class FrontController extends Controller
{
    //
    public function index(){
        $slider_top = Slider::where('slider_postion','slider_top')->get();
        $latest_video = Video::take(10)->get();
        return view('front.homepage',compact('slider_top','latest_video'));
    }
}
