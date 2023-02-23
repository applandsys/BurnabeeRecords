@extends('layouts.admin')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Add Video</h4>
                    </div>
                    </div>
                    <div class="iq-card-body">

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                        <form action="{{ route('admin.addMovie') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <input name="title" type="text" class="form-control" placeholder="Title" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <select name="video_type" class="form-control" id="video_type" required>
                                                <option value="">Video Type</option>
                                                <option value="1">Music</option>
                                                <option value="2">Movie</option>
                                                <option value="3">Drama</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <select name="content_type" class="form-control" id="content_type" required>
                                                <option value="">Content Type</option>
                                                <option value="1">Youtube Embeded</option>
                                                <option value="2">Uploaded</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <div id="video_link">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <select name="category_id" class="form-control" id="category_id">
                                                <option disabled="">Movie Category</option>
                                                <option value="1">Comedy</option>
                                                <option value="2">Crime</option>
                                                <option value="3">Drama</option>
                                                <option value="4">Horror</option>
                                                <option value="5">Romance</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 form-group">
                                           <label> Thumbnail:</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input name="thubmnail_image" data-name="#gallery2" id="form_gallery-upload" class="form_gallery-upload"
                                                type="file" accept=".png, .jpg, .jpeg">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <textarea id="text" name="description" rows="5" class="form-control"
                                                placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div> <!-- left col part-->

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <select name="quality" class="form-control" id="quality">
                                                <option disabled="">Choose quality</option>
                                                <option>FULLHD</option>
                                                <option>HD</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <select name="language" class="form-control" id="language">
                                                <option selected disabled="">Choose Language</option>
                                                <option value="Bangla">Bangla</option>
                                                <option value="English">English</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Tamil">Tamil</option>
                                                <option value="Gujarati">Gujarati</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input name="duration" type="text" class="form-control" placeholder="Video Duration">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <input name="direction" type="text" class="form-control" placeholder="Directed By">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <input name="tags" type="text" class="form-control" placeholder="Tags">
                                        </div>
                                    </div>
                                    <div id="video_detail">
                                    </div>
                                </div> <!-- right col part-->
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

