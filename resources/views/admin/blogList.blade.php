@extends('layouts.admin')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Blog List</h4>
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
                                        
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>User</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                  
                                    @foreach($blog_list as $list)
                                    <tr>
                                        <td>{{$list->blog_title}}</td>
                                        <td>{{$list->category->category_name}}</td>
                                        <td>{{$list->user->first_name}} {{$list->user->last_name}}</td>
                                        <td>
                                        <div class="flex align-items-center list-user-action">
                                            <!-- <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="lar la-eye"></i></a> -->
                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{route('admin.pageEdit', $list->id)}}"><i class="ri-pencil-line"></i></a>
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

