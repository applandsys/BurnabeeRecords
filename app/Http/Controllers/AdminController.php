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
use App\Models\HitCounter;
use App\Models\ContactMessage;
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
                'language',
            ];

          //  dd(  $input_array);

            if( $input['video_type']==2 ){
              //  array_push('singer','lyrics','tune','music_composition');
            }

            $create_data = $request->only($input_array);
            $create_data['youtube_iframe_link'] =  $all_tag ;

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


                HitCounter::create(
                    [
                        'post_id'=>$video_id,
                        'ip_address'=>'1.1.1.1',
                        'post_type'=>'video',
                        'unique_hits'=>1,
                        'raw_hits'=>1
                    ]);


            return redirect()->route('admin.addMovie')->with('success', 'Movie Created Successfully.');

        }else{
            return view('admin.addMovie');
        }
    }

    public function movieList() {
        $movie_list = Video::paginate(20);
        return view('admin.movieList',compact('movie_list'));
     }

     
    public function movieEdit(Request $request, $id) {
        $video = Video::find($id);

        $method = $request->method();
        $input = $request->input();

     //   dd(  $input);

        if ($request->isMethod('post')) {
            
            $all_tag =  $input['youtube_iframe_link']; 

            preg_match_all('/(src)=("[^"]*")/i',$all_tag, $src);

            if(!empty($src[2])){
                $all_tag = $src[2][0];
            }

            $input_array = [
                'title',
                'video_type',
                'content_type',
                'category_id',
                'description',
                'release_year',
                'language',
            ];

            
            if( $input['video_type']==2 ){
                //  array_push('singer','lyrics','tune','music_composition');
            }
  
              $create_data = $request->only($input_array);
              $create_data['youtube_iframe_link'] =  $all_tag ;

              if($request->hasFile('thubmnail_image')){
                    $image = $request->file('thubmnail_image');
    
                    $img = $image->getClientOriginalName().'_'.time().'.'.$image->getClientOriginalExtension();
                    $location = public_path('uploads/video/original_thumbnail/' .$img);
                    $thumbnail = public_path('uploads/video/thumbnail/' .$img); // Resized
                    $imgFile = Image::make($image)->save($location);
        
                    $imgFile->resize(350, 197, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail);
        
                    $create_data['thubmnail_image'] = $img;
               
              }
  
              
              $create_video = Video::where('id',$id)->update($create_data);
        
               VideoDetail::where('video_id',$id)->update(
                              [
                              'video_id'=> $id,
                              'release_year'=> (isset($input['release_year']))?$input['release_year']:null,
                              'quality'=> $input['quality'],
                              'language'=> isset($input['language'])?$input['language']:'English',
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
  
  
              return redirect()->route('admin.movieList')->with('success', 'Movie Updated Successfully.');
  


        }else{
            return view('admin.movieEdit',compact('video'));
        }     

        
    }


    public function deleteVideo($id){
        $Video = Video::find($id);
        $Video->delete(); // Easy right?
        $VideoDetail = VideoDetail::where('video_id',$id);
        $VideoDetail->delete();
        return redirect()->route('admin.movieList')->with('success', 'Deleted  Successfully.');
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

      

     public function categoryEdit(Request $request,$id) {
        $method = $request->method();
        $input = $request->input();
        $category =  Category::find($id);

        if ($request->isMethod('post')) {
            $category->category_name =   $input['category_name'];
            $category->parent_id =   $input['parent_id'];
            $category->save();
            return redirect()->route('admin.categoryList')->with('success', 'Category Updated Successfully.');
        }else{
            $category_list = Category::get();
            return view('admin.categoryEdit',compact('category','category_list'));
        }    

      
 
     }


     public function sliderList() {
        $slider_list = Slider::get();
        return view('admin.sliderList',compact('slider_list'));
     }

     public function sliderAdd(Request $request){

        if ($request->isMethod('post')) {

            $input = $request->input();

            Slider::create([
                             'slider_postion'=>  $input['slider_postion'],
                             'video_id'=>  $input['video_id'],
                             'file_name'=>  '0',
                            ]);

            return redirect()->route('admin.sliderList')->with('success', 'Slider Added Successfully.');      

        }else{
            $video = Video::take(50)->orderBy('id','DESC')->get();
            return view('admin.sliderAdd',compact('video')); 
        }
     }

     public function sliderDelete($id){
        Slider::find($id)->delete();
        return redirect()->route('admin.sliderList')->with('success', 'Slider Deleted Successfully.');    
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


    public function ContactMessageNew(){
        $contact_message = ContactMessage::where('status','new')->get();
        return view('admin.contact_message_new',compact('contact_message'));  
    }

    

    public function ContactMessageOld(){
        $contact_message = ContactMessage::where('status','replied')->get();
        return view('admin.contact_message_new',compact('contact_message'));  
    }


}
