@extends('layouts.front')
@section('content')
   <main id="main" class="site-main">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-sm-12 mb-sm-4">
               <div class="text-center iq-title-box iq-title-default">
                  <h2 class="iq-title text-capitalize">
                     Celebrity
                  </h2>
                  <p class="iq-title-desc">Our Celebrity is for your Entertainment ....</p>
               </div>
            </div>
         </div>
      </div>
      <div class="container-md container-fluid">
         <div class="row about-us-detail">
            @foreach($celebrity as $list)
            <div class="col-md-3 mb-4">
            <a href="{{route('home.celebrity_detail',['id' => $list->id, 'slug' => Illuminate\Support\Str::slug($list->celebrity_name)])}}">
               <div class="image-box">
                  <img width="265" height="345" src="{{ asset('uploads/celebirty_profile/thumbnail')}}/{{$list->profile_photo}}" class="img-fluid attachment-large size-large" alt="" loading="lazy">
               </div>
               <div class="icon-box-content">
                  <div class="widget-container">
                     <p class="heading-title size-default">Singer</p>
                  </div>
                  <div class="widget-container">
                     <h4 class="heading-title size-default">{{$list->celebrity_name}}</h4>
                  </div>
               </div>
               </a>
            </div>
            @endforeach
    
         </div>
      </div>
   </main>
@endsection