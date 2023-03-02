@extends('layouts.admin')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Add Category</h4>
                    </div>
                    </div>
                    <div class="iq-card-body">

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                        <form action="{{ route('admin.addCategory') }}" method="POST" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <input name="category_name" type="text" class="form-control" placeholder="Category Name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <select name="parent_id" class="form-control" id="parent_id" >
                                                <option value="">Parent Category (Optional)</option>
                                                @foreach($category_list as $cat)
                                                <option value="{{$cat->id}}">{{$cat->category_name}}</option>
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
</script>
@endsection

