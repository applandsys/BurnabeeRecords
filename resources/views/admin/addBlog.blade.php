@extends('layouts.admin')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Add Blog</h4>
                    </div>
                    </div>
                    <div class="iq-card-body">

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        <form action="{{ route('admin.addBlog') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <input name="blog_title" type="text" class="form-control" placeholder="Blog Title" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <textarea  id="editor1" name="blog_content" rows="6" class="form-control"
                                                placeholder="Blog Content" required></textarea>
                                        </div>
                                    </div>
                                </div> <!-- left col part-->

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <select class="form-control" name="category_id" >
                                                @foreach($category  as $list)
                                                    <option value="{{$list->id}}">{{$list->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <input name="tags" type="text" class="form-control" placeholder="Tags" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <div>
                                            <hr/>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <input name="featured_image" data-name="#gallery2" id="form_gallery-upload" class="form_gallery-upload"
                                                type="file" accept=".png, .jpg, .jpeg">
                                        </div>
                                    </div>
                                        
                                 
                                </div> <!-- right col part-->
                            </div>

                            <div class="row">
                                <div class="col-12 text-right">
                                    <input type="submit" class="btn btn-primary">
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

@push('custom-scripts')
        <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
@endpush

<script>

    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });

    CKEDITOR.replace( 'editor1' );

</script>


@endsection

