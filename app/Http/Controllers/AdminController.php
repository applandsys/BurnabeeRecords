<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use File;
use App\Models\Video;
use App\Models\VideoDetail;



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

    public function movieList(Request $request) {
        $movie_list = Video::paginate(20);
        return view('dashboard.movie.movieList',compact('movie_list'));
     }

}
