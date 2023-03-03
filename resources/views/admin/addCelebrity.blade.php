@extends('layouts.admin')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Add Celebrity</h4>
                    </div>
                    </div>
                    <div class="iq-card-body">

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        <form action="{{ route('admin.addCelebrity') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <input name="celebrity_name" type="text" class="form-control" placeholder="Celebrity Name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <input name="nick_name" type="text" class="form-control" placeholder="Nick Name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <textarea id="text" name="description" rows="6" class="form-control"
                                                placeholder="Description" required></textarea>
                                        </div>
                                    </div>
                                </div> <!-- left col part-->

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <input name="facebook_link" type="text" class="form-control" placeholder="Facebook Link" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <input name="twitter_link" type="text" class="form-control" placeholder="Twitter Link" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <input name="profile_photo" data-name="#gallery2" id="form_gallery-upload" class="form_gallery-upload"
                                                type="file" accept=".png, .jpg, .jpeg">
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <select class="form-control js-example-basic-multiple" name="video_id[]" multiple="multiple" style="color: #000">
                                                @foreach($movie_list as $list)
                                                    <option value="{{$list->id}}">{{$list->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
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

    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });

</script>
@endsection

