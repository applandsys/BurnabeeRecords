<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Slider;
use  App\Models\Video;
use  App\Models\UpcomingVideo;
use  App\Models\HitCounter;
use  App\Models\Pages;
use  App\Models\ContactMessage;
use  App\Models\BlogPost;
use  App\Models\Celebrity;


class FrontController extends Controller
{
    //
    public function index(){
        $slider_top = Slider::where('slider_postion','slider_top')->get();
        $latest_video = Video::take(10)->get();
        $upcoming_video = UpcomingVideo::take(10)->get();
        $popular_video = Video::take(10)->orderBy('hits','DESC')->get();
        $random_video = Video::take(10)->inRandomOrder()->get();
        $recomended_video = Video::take(50)->inRandomOrder()->get();
        return view('front.homepage',compact('slider_top','latest_video','upcoming_video','popular_video','random_video','recomended_video'));
    }


    public function detail(Request $request,$id){
        $detail =  Video::where('id',$id)->get();

        $clientIP = request()->ip();

        $couter_exist = HitCounter::where('post_id',$id)->where('ip_address', $clientIP)->get();


        if($couter_exist->count()){
            $raw_hits       =    $couter_exist[0]->raw_hits;
            HitCounter::where('post_id',$id)->where('ip_address', $clientIP)->update(['raw_hits'=> $raw_hits +1]);
        }else{
           // $unique_hits    =    $couter_exist[0]->unique_hits;
            HitCounter::create(
                                [
                                    'post_id'=>$id,
                                    'ip_address'=> $clientIP,
                                    'post_type'=>'video',
                                    'unique_hits'=>1,
                                    'raw_hits'=>1
                                ]);
        }

        $latest_video = Video::take(10)->get();

        return view('front.detail',compact('detail','latest_video'));
    }


    public function contact(Request $request){

        $method = $request->method();
        $input = $request->input();

        if ($request->isMethod('post')) {
           $create_data =  $request->only( ['your_name','your_subject','phone','your_email','your_message']);
           ContactMessage::create( $create_data );
           return redirect()->route('home.contact')->with('success', 'Message Sent Successfully.');
        }else{
            return view('front.contact');
        }    
        
    }

    public function page($slug){
        $page =  Pages::where('page_slug',$slug)->get();
        return view('front.page',compact('page'));
    }


    public function celebrity(){
        $celebrity =  Celebrity::paginate(20);
        return view('front.celebrity',compact('celebrity'));
    }

     

    public function celebrity_detail($id,$slug){
        return view('front.celebrity_detail');
    }

    public function videos(){
        $latest_video = Video::paginate(4);
        return view('front.videos',compact('latest_video'));
    }

    

    public function searchVideo(Request $request){
        $keyword =  $request->keyword;
       // dd( $keyword);
        $search_video = Video::where('title','LIKE','%'.$keyword.'%')->paginate(20);
        return view('front.search_video',compact('search_video'));
    }


    public function blog(){
        $blog_post = BlogPost::paginate(20);
        return view('front.blog',compact('blog_post'));
    }



}
