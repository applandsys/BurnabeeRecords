@extends('layouts.admin')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Site Setting</h4>
                    </div>
                    </div>
                    <div class="iq-card-body">

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        <form action="{{ route('admin.settings') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 form-group">
                                <textarea id="text" name="footer_content" rows="5" class="form-control">{{$Setting->footer_content}}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 form-group">
                                     <input name="facebook" type="text" class="form-control" value="{{$Setting->facebook}}" required>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12 form-group">
                                    <input name="instagram" type="text" class="form-control" value="{{$Setting->instagram}}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 form-group">
                                    <input name="tiktok" type="text" class="form-control" value="{{$Setting->tiktok}}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 form-group">
                                    <input name="spotify" type="text" class="form-control" value="{{$Setting->spotify}}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 form-group">
                                    <input name="youtube" type="text" class="form-control" value="{{$Setting->youtube}}" required>
                                </div>
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

