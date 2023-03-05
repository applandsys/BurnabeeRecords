@extends('layouts.front')
@section('content')

<main id="main" class="site-main">
      <div class="container-fluid">
         <div class="row">
               <div class="col-md-3 col-12">
                  <img src="{{ asset('uploads/celebirty_profile/thumbnail')}}/{{$celebrity->profile_photo}}" class="img-fluid" alt="" loading="lazy">
                  <div class="align-items-center trending-list flex-wrap">
                     <h3 class="trending-text text-capitalize mt-5 mb-3">Personal Info</h3>
                     <div class="list-inline p-0 mb-4 share-icons music-play-lists profile-social-lists">
                           <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico  text-primary mr-2"><i class="ri-facebook-fill"></i></a>
                           <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico text-primary  mr-2"><i class="ri-twitter-fill"></i></a>
                           <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link mr-2 text-primary "><i class="ri-links-fill"></i></a>
                     </div>
                  </div>
                  <div class="person-details">
                     <div class="">
                           <h4 class="single-person__sidebar-title">Known For</h4>
                              Music 
                     </div>
                     <div class="">
                           <h4 class="single-person__sidebar-title">Known Credits</h4>
                           10 
                     </div>
                     <div class="">
                           <h4 class="single-person__sidebar-title ">Place of Birth</h4>
                           Dhaka
                     </div>
                     <div class="">
                           <h4 class="single-person__sidebar-title">Also Known As</h4>
                           {{$celebrity->nick_name}}
                     </div>
                  </div>
               </div>
               <div class="col-md-9 col-12">
                  <h3 class="trending-text big-title text-uppercase mt-0">   {{$celebrity->celebrity_name}}</h3>
                  <div class="trending-dec w-100 movie-top-space trending-info g-border">
                                 
                     <p>{{$celebrity->description}}</p>
                     </div>
                     <div class="iq-main-header">
                           <h4 class="main-title">Most Viewer</h4>                  
                     </div>
                     <!-- Swiper -->
                     <div class="favourite-slider">
                 
                           <div  class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction " data-swiper="common-slider">
                              <ul class="swiper-wrapper m-0 p-0">
                                 @foreach($most_view as $video)
                                 <li class="swiper-slide slide-item">
                                   
                                    <div class="block-images position-relative ">
                                       <div class="img-box">
                                       <a href="{{ url('/details') }}/{{$video->id}}/{{urlencode(Illuminate\Support\Str::slug($video->title))}}"> <img src="{{ asset('uploads/video/thumbnail')}}/{{$video->thubmnail_image}}" class="img-fluid" alt=""> </a>
                                       </div>
                                       <div class="block-description">
                                          <h6 class="iq-title"><a href="{{ url('/details') }}/{{$video->id}}/{{urlencode(Illuminate\Support\Str::slug($video->title))}}">{{Illuminate\Support\Str::limit($video->title,30)}}</a></h6>
                                       </div>
                                    </div>
                                  
                                 </li>
                                 @endforeach
                              </ul>  
                              <div class="swiper-button-prev"></div>
                              <div class="swiper-button-next"></div>                      
                        </div>
                     </div>
                     <div class="cast-details">
                        <div class="iq-main-header d-flex align-items-center justify-content-between iq-ltr-direction">
                           <h4> Performing in  </h4>
                        </div>
          
                        <div class="tab-content cast-person-list" id="cast-person-list">
                           <div id="all" class="tab-pane fade active show streamit_cast_list" role="tabpanel" data-current-page="1" data-attibute="all" data-options="infinite_scroll">
                              <table class="credit_group animated fadeInUp">
                                 <tbody class="cast-related-list">
                                  @foreach($most_view as $video)
                                    <tr class="trending-pills">
                                       <td class="image"><img src="{{ asset('uploads/video/thumbnail')}}/{{$video->thubmnail_image}}" class="img-fluid" alt="wp-rig" loading="lazy"></td>
                                       <td class="seperator">1</td>
                                       <td class="content">
                                          <a href="{{ url('/details') }}/{{$video->id}}/{{urlencode(Illuminate\Support\Str::slug($video->title))}}" class="text-primary">
                                          {{Illuminate\Support\Str::limit($video->title,30)}}</a>
                                          <span class="ml-2 group"> as <span class="character">
                                            Singer </span>
                                          </span>
                                       </td>
                                       <td class="year">
                                          2016 to 2017 - 2017 to 2020                                                      
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
   </main>
@endsection