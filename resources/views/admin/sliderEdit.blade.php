@extends('layouts.admin')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Edit {{$slider->slider_postion}} Slider</h4>
                    </div>
                    </div>
                    <div class="iq-card-body">

                        <form action="{{ route('admin.sliderUpdate',$slider->id ) }}" method="POST" >
                            @csrf
                            
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <lable class="form-label">Select Video</lable>
                                            <select name="video_id" class="form-control" id="video_id" required>
                                                <option value="">Video Type</option>
                                                @foreach($movie_list as $movie)
                                                <option value="{{ $movie->id}}">{{ $movie->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div> <!-- left col part-->
                            </div>

                            <div class="row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                               
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let content_type = 0;
    let video_type = 0;

    $("#content_type").change(function(e){
        content_type = $(this).val();
            if(content_type==1){
                $("#video_link").html('<input name="youtube_iframe_link" type="text" class="form-control" placeholder="Youtube Embed Link" required>');
            }else{
                $("#video_link").html('<input name="video_upload" type="file" class="form-control" required>');
            }
    })


    $("#video_type").change(function(e){
        video_type = $(this).val();

        console.log(video_type);

            let music_form = `<div class="row">
                                <div class="col-sm-6 form-group">
                                    <input name="singer" type="text" class="form-control" placeholder="Singer">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input name="lyrics" type="text" class="form-control" placeholder="Lyrics">
                                </div>
                              </div>

                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input name="tune" type="text" class="form-control" placeholder="Tune">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input name="music_composition" type="text" class="form-control" placeholder="Music Composition">
                                </div>
                            </div>`;

                 let movie_form ='';

            if(video_type==1){
                $("#video_detail").html(music_form);
            }else{
                $("#video_detail").html(movie_form);
            }
    })

</script>
@endsection
