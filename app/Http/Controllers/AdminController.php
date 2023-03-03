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
use App\Models\RateReview;
use App\Models\Celebrity;
use App\Models\Setting;
use App\Models\BlogPost;
use Auth;



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

     
    public function movieEdit($id) {
        $video = Video::find($id);
        return view('admin.movieEdit',compact('video'));
    }

    

    public function movieUpdate(Request $request,$id) {
        $video = Video::find($id);
        $video->page_title = $request->page_title;
        $video->page_slug =  $request->page_slug;
        $video->content = $request->content;
        $video->save();
        return redirect()->route('admin.movieList')->with('success','Movie Updated');
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

     public function addCategory(Request $request) {
        $method = $request->method();
        $input = $request->input();

        if ($request->isMethod('post')) {
            $input_array = [
                'category_name',
                'parent_id'
            ];
            $create_data = $request->only($input_array);
            $create_category = Category::create($create_data);

            return redirect()->route('admin.addCategory')->with('success', 'Category Created Successfully.');

        }else{
            $category_list = Category::get();
            return view('admin.addCategory',compact('category_list'));
        }
    }

     public function categoryList() {
        $category_list = Category::get();
        return view('admin.categoryList',compact('category_list'));
     }

      

     public function categoryEdit($id) {
        $category =  Category::paginate(20);
        return view('admin.categoryEdit',compact('slider','category'));
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


     public function ratingList() {
        $rating_list = RateReview::paginate(20);
        return view('admin.ratingList',compact('rating_list'));
     }

     public function reviewList() {
        $review_list = RateReview::paginate(20);
        return view('admin.reviewList',compact('review_list'));
     }


    
     public function addCelebrity(Request $request) {
        $method = $request->method();
        $input = $request->input();

        if ($request->isMethod('post')) {
   
            $input_array = [
                'celebrity_name',
                'nick_name',
                'description',
                'profile_photo',
                'facebook_link',
                'twitter_link',
                'video_id',
            ];

            $create_data = $request->only($input_array);

            $image = $request->file('profile_photo');

            $img = $image->getClientOriginalName().'_'.time().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/celebirty_profile/original_thumbnail/' .$img);
            $thumbnail = public_path('uploads/celebirty_profile/thumbnail/' .$img); // Resized
            $imgFile = Image::make($image)->save($location);

            $imgFile->resize(265, 345, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumbnail);

            $create_data['profile_photo'] = $img;
            $create_data['video_id'] = json_encode($input['video_id']) ;

            $create_video = Celebrity::create($create_data);

            return redirect()->route('admin.addCelebrity')->with('success', 'Celebrity Created Successfully');

        }else{
            $movie_list = Video::get();
            return view('admin.addCelebrity',compact('movie_list'));
        }
    }

    public function celebrityList() {
        $celebrity_list = Celebrity::paginate(20);
        return view('admin.celebrityList',compact('celebrity_list'));
    }

    public function Settings(Request $request) {
        $method = $request->method();
        $input = $request->input();

        $Setting = Setting::find(1);

        if ($request->isMethod('post')) {

            $Setting->footer_content = $request->footer_content;
            $Setting->facebook = $request->facebook;
            $Setting->instagram = $request->instagram;
            $Setting->tiktok = $request->tiktok;
            $Setting->spotify = $request->spotify;
            $Setting->youtube = $request->youtube;
            $Setting->save();

            return redirect()->route('admin.Settings')->with('success', 'Setting Updated Successfully.');

        }else{
            return view('admin.Setting',compact('Setting'));
        }
    }



    public function blogList() {
        $blog_list = BlogPost::paginate(20);
       // dd(  $blog_list);
        return view('admin.blogList',compact('blog_list'));
    }

       
    public function addBlog(Request $request) {
        $method = $request->method();
        $input = $request->input();

        if ($request->isMethod('post')) {
   
            $input_array =  [
                                'category_id',
                                'blog_title',
                                'blog_content',
                                'tags'
                            ];;

            $create_data = $request->only($input_array);

            $image = $request->file('featured_image');

            $img = $image->getClientOriginalName().'_'.time().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/blog/original_thumbnail/' .$img);
            $thumbnail = public_path('uploads/blog/thumbnail/' .$img); // Resized
            $imgFile = Image::make($image)->save($location);

            $imgFile->resize(350, 197, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumbnail);

            $create_data['featured_image'] = $img;
            $create_data['user_id'] =Auth::id();
            
            $create_video = BlogPost::create($create_data);

            return redirect()->route('admin.blogList')->with('success', 'Blog Created Successfully');

        }else{
            $category = Category::get();
            return view('admin.addBlog',compact('category'));
        }
    }


}
