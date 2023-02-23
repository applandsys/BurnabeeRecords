<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use File;
use App\Models\Video;
use App\Models\VideoDetail;
use App\Models\Pages;
use App\Models\User;
use App\Models\Category;
use App\Models\Slider;



class AdminController extends Controller
{
    public function index(){

        return view('admin.dashboard');
    }


    public function addMovie(Request $request) {
        $method = $request->method();
        $input = $request->input();

        if ($request->isMethod('post')) {

            $all_tag =  $input['youtube_iframe_link']; 

            preg_match_all('/(src)=("[^"]*")/i',$all_tag, $src);

            if(!empty($src[2])){
                $all_tag = $src[2][0];
            }

       
            //title video_type content_type category_id  thubmnail_image description quality language duration direction tags

            $input_array = [
                'title',
                'video_type',
                'content_type',
                'category_id',
                'description',
                'release_year',
                'quality',
                'youtube_iframe_link',
                'language',
                'duration',
                'tags',
            ];

          //  dd(  $input_array);

            if( $input['video_type']==2 ){
              //  array_push('singer','lyrics','tune','music_composition');
            }

            $create_data = $request->only($input_array);

            $image = $request->file('thubmnail_image');

            $img = $image->getClientOriginalName().'_'.time().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/video/original_thumbnail/' .$img);
            $thumbnail = public_path('uploads/video/thumbnail/' .$img); // Resized
            $imgFile = Image::make($image)->save($location);

            $imgFile->resize(350, 197, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumbnail);

            $create_data['thubmnail_image'] = $img;

            $create_video = Video::create($create_data);

            $video_id = $create_video->id;
      
             VideoDetail::create(
                            [
                            'video_id'=> $video_id,
                            'release_year'=> (isset($input['release_year']))?$input['release_year']:null,
                            'quality'=> $input['quality'],
                            'language'=> $input['language'],
                            'duration'=> $input['duration'],
                            'singer'=> $input['singer'],
                            'lyrics'=> $input['lyrics'],
                            'tune'=> $input['tune'],
                            'music_composition'=> $input['music_composition'],
                            'direction'=> $input['direction'],
                            'cast'=> (isset($input['cast']))?$input['cast']:null,
                            'label'=> (isset($input['label']))?$input['label']:null,
                            'recorded_at'=> (isset($input['recorded_at']))?$input['recorded_at']:null,
                            'tags'=> $input['tags']
                            ]
                );


            return redirect()->route('admin.addMovie')->with('success', 'Movie Created Successfully.');

        }else{
            return view('admin.addMovie');
        }
    }

    public function movieList() {
        $movie_list = Video::paginate(20);
        return view('admin.movieList',compact('movie_list'));
     }

     public function pageList() {
        $page_list = Pages::paginate(20);
        return view('admin.pageList',compact('page_list'));
     }

     
     public function pageEdit($id) {
        $page = Pages::find($id);
        return view('admin.pageEdit',compact('page'));
     }

     public function pageUpdate(Request $request,$id) {
        $page = Pages::find($id);
        $page->page_title = $request->page_title;
        $page->page_slug =  $request->page_slug;
        $page->content = $request->content;
        $page->save();
        return redirect()->route('admin.pageList')->with('success','Page Updated');
     }


     public function userList() {
        $user_list = User::paginate(20);
        return view('admin.userList',compact('user_list'));
     }

     public function categoryList() {
        $category_list = Category::paginate(20);
        return view('admin.categoryList',compact('category_list'));
     }

     public function sliderList() {
        $slider_list = Slider::paginate(20);
        return view('admin.sliderList',compact('slider_list'));
     }

     
     public function sliderEdit($id) {
        $slider = Slider::find($id);
        $movie_list = Video::get();
        return view('admin.sliderEdit',compact('slider','movie_list'));
     }


     public function sliderUpdate(Request $request,$id) {
        $slider = Slider::find($id);
        $slider->video_id = $request->video_id;
        $slider->save();
        return redirect()->route('admin.sliderList')->with('success','Slider Updated');
     }


}
