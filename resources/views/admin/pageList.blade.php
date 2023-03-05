@extends('layouts.admin')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                    <div class="" style="display:flex; justify-content: space-between; width: 100%">
                        <div><h4 class="card-title">Page List</h4></div>
                        <div> <a href="" class="btn btn-primary"> <i class="las la-plus-circle"></i> Add Page</a> </div>
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
                                        <th>Page Title</th>
                                        <th>Page Slug</th>
                                        <th>Content</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($page_list as $list)
                                    <tr>
                                        <td>{{$list->page_title}}</td>
                                        <td>{{$list->page_slug}}</td>
                                        <td>{{$list->content}}</td>
                                       
                                        <td>
                                        <div class="flex align-items-center list-user-action">
                                            <!-- <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="lar la-eye"></i></a> -->
                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{route('admin.pageEdit', $list->id)}}"><i class="ri-pencil-line"></i></a>
                                            <!-- <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a> -->
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

