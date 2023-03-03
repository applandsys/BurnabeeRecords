@extends('layouts.admin')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Footer Content</h4>
                    </div>
                    </div>
                    <div class="iq-card-body">

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        @php
                       //    dd($Setting);
                        @endphp

                        <form action="{{ route('admin.Settings') }}" method="POST" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label>Footer Text</label>
                                            <textarea id="text" name="footer_content" rows="6" class="form-control"
                                                placeholder="Footer Contant" required>{{$Setting->footer_content}}</textarea>
                                        </div>
                                    </div>
                                </div> <!-- left col part-->
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label>Facebook</label>
                                            <input name="facebook" type="text" class="form-control" value="{{$Setting->facebook}}" required>
                                        </div>
                                    </div>
                                </div> <!-- left col part-->
                            </div>

                            
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label>Facebook</label>
                                            <input name="twitter" type="text" class="form-control" value="{{$Setting->twitter}}" required>
                                        </div>
                                    </div>
                                </div> <!-- left col part-->
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label>Facebook</label>
                                            <input name="instagram" type="text" class="form-control" value="{{$Setting->instagram}}" required>
                                        </div>
                                    </div>
                                </div> <!-- left col part-->
                            </div>

                            
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label>Facebook</label>
                                            <input name="tiktok" type="text" class="form-control" value="{{$Setting->tiktok}}" required>
                                        </div>
                                    </div>
                                </div> <!-- left col part-->
                            </div>

                                           
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label>Facebook</label>
                                            <input name="spotify" type="text" class="form-control" value="{{$Setting->spotify}}" required>
                                        </div>
                                    </div>
                                </div> <!-- left col part-->
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label>Facebook</label>
                                            <input name="youtube" type="text" class="form-control" value="{{$Setting->youtube}}" required>
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
</script>
@endsection

