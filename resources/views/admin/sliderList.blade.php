@extends('layouts.admin')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                    <div class="top_button">
                        <div><h4 class="card-title">Slider List</h4></div>
                        <div> <a href="{{ route('admin.sliderAdd') }}" class="btn btn-primary"> <i class="las la-plus-circle"></i> Add Slider</a> </div>
                    </div>
                    </div>
                    <div class="iq-card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <div class="table-view">
                            <table class="data-tables table movie_table " style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Slider Position</th>
                                        <th>Slider Video</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($slider_list as $list)
                                    <tr>
                                        <td>{{$list->slider_postion}}</td>
                                        <td>{{$list->video->title}}</td>
                                   
                                        <td>
                                        <div class="flex align-items-center list-user-action">
                                            <!-- <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{route('admin.sliderEdit', $list->id)}}"><i class="ri-pencil-line"></i></a> -->
                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{route('admin.sliderDelete', $list->id)}}"  onclick="return confirm('Are you sure you want to delete?');"><i class="ri-delete-bin-line"></i></a>
                                        </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

