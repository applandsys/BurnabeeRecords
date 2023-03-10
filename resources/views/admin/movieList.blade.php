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
                    <div class="table-view">
                            @php
                           // dd($movie_list)
                            @endphp
                            <table class="data-tables table movie_table " style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Release Year</th>
                                        <th>Language</th>
                                        <th style="width: 20%;">Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($movie_list as $list)
                                    <tr>
                                        <td>
                                        <div class="media align-items-center">
                                            <div class="iq-movie">
                                                <a href="javascript:void(0);"><img src="{{ asset('uploads/movie/thumbnail') }}/{{$list->thubmnail_image}}" class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                            </div>
                                            <div class="media-body text-white text-left ml-3">
                                                <p class="mb-0">{{$list->title}}</p>
                                                <small>{{$list->duration}}</small>
                                            </div>
                                        </div>
                                        </td>
                                        <td>{{$list->category}}</td>
                                        <td>{{$list->release_year}}</td>
                                        <td>{{$list->language}}</td>
                                        <td>
                                        <p>{{$list->description}}
                                        </p>
                                        </td>
                                        <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="lar la-eye"></i></a>
                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
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

