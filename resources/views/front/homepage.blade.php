@extends('layouts.front')
@section('content')
   @include('front.partials.slider',$slider_top)
         <!-- MainContent -->
         <div class="main-content">
         <section id="iq-favorites">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Latest Movies</h4>
                        <a href="view-all.html" class="text-primary iq-view-all">View All</a>
                     </div>
                  </div>
               </div>
               <!-- Swiper -->
               <div class="favourite-slider">
                  <div  class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                     <ul class="swiper-wrapper p-0 m-0 ">
                        @foreach($latest_video as $latest)
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="{{ asset('uploads/video/thumbnail')}}/{{$latest->thubmnail_image}}" class="img-fluid" alt="" loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">{{Illuminate\Support\Str::limit($latest->title,30)}}</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">{{$latest->videodatail->duration}}</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" role="button" class="btn btn-hover"><i
                                       class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u={{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text={{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                class="ri-twitter-fill"></i></a>
                                             <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}"
                                                data-link="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">2+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        @endforeach
                     </ul>
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>
                  </div>
               </div>
            </div>
         </section>
         @if(count($upcoming_video))
         <section id="iq-upcoming-movie">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Upcoming Movies</h4>
                        <a href="#" class="text-primary iq-view-all">View All</a>
                     </div>
                  </div>
               </div>
               <!-- Swiper -->
               <div class="favourite-slider">
                  <div class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                     <ul class="swiper-wrapper p-0 m-0">
                        @foreach($upcoming_video as $uvideo)
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="{{ asset('uploads/upcoming/thumbnail')}}/{{$latest->thumbnail}}" class="img-fluid" alt="" loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="#">{{$uvideo->title}}</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 50mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <!-- <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" role="button" class="btn btn-hover"><i
                                       class="fa fa-play mr-1" aria-hidden="true"></i>
                                    Play Now
                                    </a> -->
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">2+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                       @endforeach
                     </ul>
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>
                  </div>
               </div>
            </div>
         </section>
         @endif
         <div class="verticle-slider">
            <div class="container-fluid">
               <section class="slider">
                  <div class="slider-flex position-relative">
                     <div class="swiper-button-prev verticle-btn"></div>
                     <h4 class="main-title ">Top 10 Popular</h4>
                     <div class="slider--col position-relative">
                        <div class="slider-prev btn-verticle"><i class="ri-arrow-up-s-line vertical-aerrow"></i></div>
                        <div class="slider-thumbs" data-swiper="slider-thumbs">
                           <div class="swiper-container " data-swiper="slider-thumbs-inner">
                              <div class="swiper-wrapper top-ten-slider-nav">

                              @foreach($popular_video as $pvideo)
                                 <div class="swiper-slide swiper-bg">
                                    <div class="block-images position-relative ">
                                       <div class="img-box slider--image">
                                          <img src="{{ asset('uploads/video/thumbnail')}}/{{$pvideo->thubmnail_image}}" class="img-fluid" alt="" loading="lazy">
                                       </div>
                                       <div class="block-description">
                                          <h6 class="iq-title"><a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">{{$pvideo->title}}</a></h6>
                                          <div class="movie-time d-flex align-items-center my-2">
                                             <span class="text-white">1hr : 50mins</span>
                                          </div>
                                          <div class="hover-buttons">
                                             <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" role="button" class="btn btn-hover"><i
                                                class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Play Now
                                             </a>
                                          </div>
                                       </div>
                                       <div class="block-social-info">
                                          <ul class="list-inline p-0 m-0 music-play-lists">
                                             <li class="share">
                                                <span><i class="ri-share-fill"></i></span>
                                                <div class="share-box">
                                                   <div class="d-flex align-items-center">
                                                      <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                         target="_blank" rel="noopener noreferrer" class="share-ico"
                                                         tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                      <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                         target="_blank" rel="noopener noreferrer" class="share-ico"
                                                         tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                      <a href="#"
                                                         data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                         class="share-ico iq-copy-link" tabindex="0"><i
                                                         class="ri-links-fill"></i></a>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box">2+</span>
                                             </li>
                                             <li><span><i class="ri-add-line"></i></span></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              @endforeach
                               
                              </div>
                           </div>
                        </div>
                        <div class="slider-next btn-verticle"><i class="ri-arrow-down-s-line vertical-aerrow"></i></div>
                     </div>

                     <div class="slider-images" data-swiper="slider-images">
                        <div class="swiper-container " data-swiper="slider-images-inner">
                           <div class="swiper-wrapper ">
                              
                              @foreach($popular_video as $pvideo)
                              <div class="swiper-slide">
                                 <div class="slider--image block-images"><img src="{{ asset('uploads/video/original_thumbnail')}}/{{$pvideo->thubmnail_image}}" loading="lazy" alt="" /></div>
                                 <div class="description">
                                    <div class="block-description">
                                       <h6 class="iq-title"><a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Shadow Warrior</a></h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <span class="text-white">1hr : 50mins</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" role="button" class="btn btn-hover"><i
                                             class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              @endforeach

                           </div>
                        </div>
                     </div>
                     <div class="swiper-button-prev verticle-btn"></div>
                     <div class="swiper-button-next verticle-btn"></div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
         <section id="iq-suggestede" class="s-margin">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Suggested For You</h4>
                        <a href="#" class="text-primary iq-view-all">View All</a>
                     </div>
                  </div>
               </div>
               <!-- Swiper -->
               <div class="favourite-slider">
                  <div  class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                     <ul class="swiper-wrapper p-0 m-0">
          

                     @foreach($random_video as $rvideo)

                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="{{ asset('uploads/video/thumbnail')}}/{{$rvideo->thubmnail_image}}" class="img-fluid" loading="lazy" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">X-Men</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" role="button" class="btn btn-hover">
                                    <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                    Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">25+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>

                        @endforeach

                     </ul>
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>
                  </div>
               </div>
            </div>
         </section>
         <!-- <section id="parallex" class="parallax-window">
            <div class="container-fluid h-100">
               <div class="row align-items-center justify-content-center h-100 parallaxt-details">
                  <div class="col-xl-5 col-lg-12 col-md-12 r-mb-23">
                     <div class="text-left">
                        <a href="javascript:void(0);">
                        <img src="{{ asset('assets/front_template/images/parallax/parallax-logo.png')}}" loading="lazy" class="img-fluid" alt="bailey">
                        </a>
                        <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                           <ul
                              class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                              <li><a href="javascript:void(0);" class="text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star-half-o"
                                 aria-hidden="true"></i></a></li>
                           </ul>
                           <span class="text-white ml-3">9.2 (lmdb)</span>
                        </div>
                        <div class="movie-time d-flex align-items-center mb-3 iq-ltr-direction">
                           <div class="badge badge-secondary mr-3">13+</div>
                           <h6 class="text-white">2hr:30mins</h6>
                        </div>
                        <h4 class="iq-title mb-2">
                           Movie of the year 
                        </h4>
                        <p class="iq-title-desc mb-5">Baileys Irish Cream is an Irish cream liqueur an alcoholic beverage
                           flavoured with cream, cocoa, and Irish whiskey made by Diageo at Republic of Ireland and in
                           Mallusk, Northern Ireland.
                        </p>
                        <div class="parallax-buttons">
                           <a href="movie-details.html" class="btn btn-hover"><i class="fa fa-play mr-1"
                              aria-hidden="true"></i>Play Now</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-12 col-md-12 mt-5 mt-xl-0">
                     <div class="parallax-img">
                        <a href="movie-details.html">
                        <img src="{{ asset('assets/front_template/images/parallax/p2.jpg')}}" class="img-fluid w-100" loading="lazy" alt="bailey">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="">
            <div class="container-fluid">
               <div class="row m-0 p-0">
                  <div id="iq-trending" class="s-margin iq-tvshow-tabs iq-rtl-direction iq-trending-tabs">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">
                           Trending				
                        </h4>
                     </div>
                     <div class="trending-contens position-relative ">
                        <div id="gallery-top" class="gallery-thumbs" data-swiper="gallery-top">
                           <ul class="swiper-wrapper list-inline p-0 m-0  trending-slider-nav align-items-center ">
                              <li class="swiper-slide">
                                 <a href="javascript:void(0);" >
                                    <div class="movie-swiper position-relative">
                                       <img src="{{ asset('assets/front_template/images/tvthrillers/01.jpg')}}" alt="" />
                                    </div>
                                 </a>
                              </li>
                              <li class="swiper-slide">
                                 <a href="javascript:void(0);" >
                                    <div class="movie-swiper position-relative">
                                       <img src="{{ asset('assets/front_template/images/tvthrillers/02.jpg')}}" alt="" />
                                    </div>
                                 </a>
                              </li>
                              <li class="swiper-slide">
                                 <a href="javascript:void(0);" >
                                    <div class="movie-swiper position-relative">
                                       <img src="{{ asset('assets/front_template/images/tvthrillers/03.jpg')}}" alt="" />
                                    </div>
                                 </a>
                              </li>
                              <li class="swiper-slide">
                                 <a href="javascript:void(0);" >
                                    <div class="movie-swiper position-relative">
                                       <img src="{{ asset('assets/front_template/images/tvthrillers/04.jpg')}}" alt="" />
                                    </div>
                                 </a>
                              </li>
                              <li  class="swiper-slide">
                                 <a href="javascript:void(0);" tabindex="0">
                                    <div class="movie-swiper position-relative">
                                       <img src="{{ asset('assets/front_template/images/tvthrillers/05.jpg')}}" alt="" />
                                    </div>
                                 </a>
                              </li>
                              <li  class="swiper-slide">
                                 <a href="javascript:void(0);" tabindex="0">
                                    <div class="movie-swiper position-relative">
                                       <img src="{{ asset('assets/front_template/images/tvthrillers/06.jpg')}}" alt="" />
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div id="gallery-bottom" class="swiper trending-tab-slider" data-swiper="gallery-bottom">
                           <ul  class="swiper-wrapper  list-inline p-0 m-0 d-flex align-items-center">
                              <li class="swiper-slide swiper-bg slider-big-img-1">
                                 <div class="position-relative" >
                                    <div class="trending-custom-tab">
                                       <div class="tab-title-info position-relative">
                                          <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                                             <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="pill" href="#trending-data1"
                                                   role="tab" aria-selected="true">Overview</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data2" role="tab"
                                                   aria-selected="false">Episodes</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data3" role="tab"
                                                   aria-selected="false">Trailers</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data4" role="tab"
                                                   aria-selected="false">Similar Like This</a>
                                             </li>
                                          </ul>
                                          <div class="tab-content trending-content">
                                             <div id="trending-data1" class="tab-pane fade active show ">
                                                <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                   <a href="javascript:void(0);" tabindex="0">
                                                      <div class="res-logo">
                                                         <div class="channel-logo">
                                                            <img src="images/logo.png" class="c-logo" alt="streamit">
                                                         </div>
                                                      </div>
                                                   </a>
                                                   <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                   <div class="d-flex align-items-center text-white text-detail">
                                                      <span class="badge badge-secondary p-3">18+</span>
                                                      <span class="ml-3">3 Seasons</span>
                                                      <span class="trending-year">2020</span>
                                                   </div>
                                                   <div class="d-flex align-items-center series mb-4">
                                                      <a href="javascript:void(0);"><img src="images/trending/trending-label.png"
                                                         class="img-fluid" alt=""></a>
                                                      <span class="text-gold ml-3">#2 in Series Today</span>
                                                   </div>
                                                   <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting
                                                      industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                   </p>
                                                   <div class="p-btns">
                                                      <div class="d-flex align-items-center p-0">
                                                         <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" class="btn btn-hover mr-2" tabindex="0"><i
                                                            class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                         <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                         List</a>
                                                      </div>
                                                   </div>
                                                   <div class="trending-list mt-4">
                                                      <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                         Moura, Boyd Holbrook, Joanna</span>
                                                      </div>
                                                      <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                         Action, Thriller, Biography</span>
                                                      </div>
                                                      <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                         Forceful</span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="trending-data2" class="tab-pane fade ">
                                                <div
                                                   class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                   <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0">
                                                      <div class="channel-logo">
                                                         <img src="images/logo.png" class="c-logo" alt="stramit">
                                                      </div>
                                                   </a>
                                                   <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                   <div class="d-flex align-items-center text-white text-detail mb-4">
                                                      <span class="season_date ml-2">
                                                      2 Seasons
                                                      </span>
                                                      <span class="trending-year">Feb 2019</span>
                                                   </div>
                                                   <div class="iq-custom-select d-inline-block sea-epi">
                                                      <select name="cars" class="form-control season-select">
                                                         <option value="season1">Season 1</option>
                                                         <option value="season2">Season 2</option>
                                                         <option value="season3">Season 3</option>
                                                      </select>
                                                   </div>
                                                   <div class="episodes-contens mt-4">
                                                      <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                               <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 1</a>
                                                                  <span class="text-primary">2.25 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                               <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body ">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 2</a>
                                                                  <span class="text-primary">3.23 m</span>
                                                               </div>
                                                               <p class="mb-0">
                                                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                               <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 3</a>
                                                                  <span class="text-primary">2 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                               <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body ">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 4</a>
                                                                  <span class="text-primary">1.12 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                               <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 5</a>
                                                                  <span class="text-primary">2.54 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="trending-data3" class="tab-pane fade">
                                                <div
                                                   class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                   <a href="javascript:void(0);" tabindex="0">
                                                      <div class="channel-logo">
                                                         <img src="images/logo.png" class="c-logo" alt="stramit">
                                                      </div>
                                                   </a>
                                                   <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                   <div class="episodes-contens mt-4">
                                                      <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="watch-video.html" target="_blank">
                                                               <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="watch-video.html" target="_blank">Trailer 1</a>
                                                                  <span class="text-primary">2.25 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="watch-video.html" target="_blank">
                                                               <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="watch-video.html" target="_blank">Trailer 2</a>
                                                                  <span class="text-primary">3.23 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="watch-video.html" target="_blank">
                                                               <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="watch-video.html" target="_blank">Trailer 3</a>
                                                                  <span class="text-primary">2 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="watch-video.html" target="_blank">
                                                               <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="watch-video.html" target="_blank">Trailer 4</a>
                                                                  <span class="text-primary">1.12 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="watch-video.html" target="_blank">
                                                               <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="watch-video.html" target="_blank">Trailer 5</a>
                                                                  <span class="text-primary">2.54 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="trending-data4" class="tab-pane fade">
                                                <div
                                                   class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                   <a href="javascript:void(0);" tabindex="0">
                                                      <div class="channel-logo">
                                                         <img src="images/logo.png" class="c-logo" alt="stramit">
                                                      </div>
                                                   </a>
                                                   <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                   <div class="episodes-contens mt-4">
                                                      <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                               <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 1</a>
                                                                  <span class="text-primary">2.25 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                               <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 2</a>
                                                                  <span class="text-primary">3.23 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                               <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 3</a>
                                                                  <span class="text-primary">2 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                               <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 4</a>
                                                                  <span class="text-primary">1.12 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="e-item">
                                                            <div class="block-image position-relative">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                               <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                               </a>
                                                               <div class="episode-play-info">
                                                                  <div class="episode-play">
                                                                     <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                        class="ri-play-fill"></i></a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="episodes-description text-body">
                                                               <div class="d-flex align-items-center justify-content-between">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 5</a>
                                                                  <span class="text-primary">2.54 m</span>
                                                               </div>
                                                               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                               </p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="swiper-slide swiper-bg slider-big-img-2">
                                 <div class="position-relative" >
                                    <div class="trending-custom-tab">
                                       <div class="tab-title-info position-relative">
                                          <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                                             <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="pill" href="#trending-data5"
                                                   role="tab" aria-selected="true">Overview</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data6" role="tab"
                                                   aria-selected="false">Episodes</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data7" role="tab"
                                                   aria-selected="false">Trailers</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data8" role="tab"
                                                   aria-selected="false">Similar Like This</a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="trending-content tab-content">
                                          <div id="trending-data5" class="tab-pane fade active show ">
                                             <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="res-logo">
                                                      <div class="channel-logo">
                                                         <img src="images/logo.png" class="c-logo" alt="streamit">
                                                      </div>
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="d-flex align-items-center text-white text-detail">
                                                   <span class="badge badge-secondary p-3">18+</span>
                                                   <span class="ml-3">3 Seasons</span>
                                                   <span class="trending-year">2020</span>
                                                </div>
                                                <div class="d-flex align-items-center series mb-4">
                                                   <a href="javascript:void(0);"><img src="images/trending/trending-label.png"
                                                      class="img-fluid" alt=""></a>
                                                   <span class="text-gold ml-3">#2 in Series Today</span>
                                                </div>
                                                <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting
                                                   industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                </p>
                                                <div class="p-btns">
                                                   <div class="d-flex align-items-center p-0">
                                                      <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" class="btn btn-hover mr-2" tabindex="0"><i
                                                         class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                      <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                      List</a>
                                                   </div>
                                                </div>
                                                <div class="trending-list mt-4">
                                                   <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                      Moura, Boyd Holbrook, Joanna</span>
                                                   </div>
                                                   <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                      Action, Thriller, Biography</span>
                                                   </div>
                                                   <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                      Forceful</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data6" class="tab-pane fade ">
                                             <div
                                                class="trending-info  align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="d-flex align-items-center text-white text-detail mb-4">
                                                   <span class="season_date ml-2">
                                                   2 Seasons
                                                   </span>
                                                   <span class="trending-year">Feb 2019</span>
                                                </div>
                                                <div class="iq-custom-select d-inline-block sea-epi">
                                                   <select name="cars" class="form-control season-select">
                                                      <option value="season1">Season 1</option>
                                                      <option value="season2">Season 2</option>
                                                      <option value="season3">Season 3</option>
                                                   </select>
                                                </div>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body ">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">
                                                               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body ">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data7" class="tab-pane fade">
                                             <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data8" class="tab-pane fade">
                                             <div
                                                class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="swiper-slide swiper-bg slider-big-img-3">
                                 <div class="position-relative" >
                                    <div class="trending-custom-tab">
                                       <div class="tab-title-info position-relative">
                                          <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                                             <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="pill" href="#trending-data11"
                                                   role="tab" aria-selected="true">Overview</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data12" role="tab"
                                                   aria-selected="false">Episodes</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data13" role="tab"
                                                   aria-selected="false">Trailers</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data14" role="tab"
                                                   aria-selected="false">Similar Like This</a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="trending-content tab-content">
                                          <div id="trending-data11" class="tab-pane fade active show ">
                                             <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="res-logo">
                                                      <div class="channel-logo">
                                                         <img src="images/logo.png" class="c-logo" alt="streamit">
                                                      </div>
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="d-flex align-items-center text-white text-detail">
                                                   <span class="badge badge-secondary p-3">18+</span>
                                                   <span class="ml-3">3 Seasons</span>
                                                   <span class="trending-year">2020</span>
                                                </div>
                                                <div class="d-flex align-items-center series mb-4">
                                                   <a href="javascript:void(0);"><img src="images/trending/trending-label.png"
                                                      class="img-fluid" alt=""></a>
                                                   <span class="text-gold ml-3">#2 in Series Today</span>
                                                </div>
                                                <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting
                                                   industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                </p>
                                                <div class="p-btns">
                                                   <div class="d-flex align-items-center p-0">
                                                      <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" class="btn btn-hover mr-2" tabindex="0"><i
                                                         class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                      <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                      List</a>
                                                   </div>
                                                </div>
                                                <div class="trending-list mt-4">
                                                   <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                      Moura, Boyd Holbrook, Joanna</span>
                                                   </div>
                                                   <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                      Action, Thriller, Biography</span>
                                                   </div>
                                                   <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                      Forceful</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data12" class="tab-pane fade ">
                                             <div
                                                class="trending-info  align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="d-flex align-items-center text-white text-detail mb-4">
                                                   <span class="season_date ml-2">
                                                   2 Seasons
                                                   </span>
                                                   <span class="trending-year">Feb 2019</span>
                                                </div>
                                                <div class="iq-custom-select d-inline-block sea-epi">
                                                   <select name="cars" class="form-control season-select">
                                                      <option value="season1">Season 1</option>
                                                      <option value="season2">Season 2</option>
                                                      <option value="season3">Season 3</option>
                                                   </select>
                                                </div>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body ">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">
                                                               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body ">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data13" class="tab-pane fade">
                                             <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data14" class="tab-pane fade">
                                             <div
                                                class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="swiper-slide swiper-bg slider-big-img-4">
                                 <div class="position-relative" >
                                    <div class="trending-custom-tab">
                                       <div class="tab-title-info position-relative">
                                          <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                                             <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="pill" href="#trending-data15"
                                                   role="tab" aria-selected="true">Overview</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data16" role="tab"
                                                   aria-selected="false">Episodes</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data17" role="tab"
                                                   aria-selected="false">Trailers</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data18" role="tab"
                                                   aria-selected="false">Similar Like This</a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="trending-content tab-content">
                                          <div id="trending-data15" class="tab-pane fade active show ">
                                             <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="res-logo">
                                                      <div class="channel-logo">
                                                         <img src="images/logo.png" class="c-logo" alt="streamit">
                                                      </div>
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="d-flex align-items-center text-white text-detail">
                                                   <span class="badge badge-secondary p-3">18+</span>
                                                   <span class="ml-3">3 Seasons</span>
                                                   <span class="trending-year">2020</span>
                                                </div>
                                                <div class="d-flex align-items-center series mb-4">
                                                   <a href="javascript:void(0);"><img src="images/trending/trending-label.png"
                                                      class="img-fluid" alt=""></a>
                                                   <span class="text-gold ml-3">#2 in Series Today</span>
                                                </div>
                                                <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting
                                                   industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                </p>
                                                <div class="p-btns">
                                                   <div class="d-flex align-items-center p-0">
                                                      <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" class="btn btn-hover mr-2" tabindex="0"><i
                                                         class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                      <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                      List</a>
                                                   </div>
                                                </div>
                                                <div class="trending-list mt-4">
                                                   <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                      Moura, Boyd Holbrook, Joanna</span>
                                                   </div>
                                                   <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                      Action, Thriller, Biography</span>
                                                   </div>
                                                   <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                      Forceful</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data16" class="tab-pane fade ">
                                             <div
                                                class="trending-info  align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="d-flex align-items-center text-white text-detail mb-4">
                                                   <span class="season_date ml-2">
                                                   2 Seasons
                                                   </span>
                                                   <span class="trending-year">Feb 2019</span>
                                                </div>
                                                <div class="iq-custom-select d-inline-block sea-epi">
                                                   <select name="cars" class="form-control season-select">
                                                      <option value="season1">Season 1</option>
                                                      <option value="season2">Season 2</option>
                                                      <option value="season3">Season 3</option>
                                                   </select>
                                                </div>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body ">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">
                                                               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body ">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data17" class="tab-pane fade">
                                             <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data18" class="tab-pane fade">
                                             <div
                                                class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="swiper-slide swiper-bg slider-big-img-5">
                                 <div class="position-relative" >
                                    <div class="trending-custom-tab">
                                       <div class="tab-title-info position-relative">
                                          <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                                             <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="pill" href="#trending-data19"
                                                   role="tab" aria-selected="true">Overview</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data20" role="tab"
                                                   aria-selected="false">Episodes</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data21" role="tab"
                                                   aria-selected="false">Trailers</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data22" role="tab"
                                                   aria-selected="false">Similar Like This</a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="trending-content tab-content">
                                          <div id="trending-data19" class="tab-pane fade active show ">
                                             <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="res-logo">
                                                      <div class="channel-logo">
                                                         <img src="images/logo.png" class="c-logo" alt="streamit">
                                                      </div>
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="d-flex align-items-center text-white text-detail">
                                                   <span class="badge badge-secondary p-3">18+</span>
                                                   <span class="ml-3">3 Seasons</span>
                                                   <span class="trending-year">2020</span>
                                                </div>
                                                <div class="d-flex align-items-center series mb-4">
                                                   <a href="javascript:void(0);"><img src="images/trending/trending-label.png"
                                                      class="img-fluid" alt=""></a>
                                                   <span class="text-gold ml-3">#2 in Series Today</span>
                                                </div>
                                                <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting
                                                   industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                </p>
                                                <div class="p-btns">
                                                   <div class="d-flex align-items-center p-0">
                                                      <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" class="btn btn-hover mr-2" tabindex="0"><i
                                                         class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                      <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                      List</a>
                                                   </div>
                                                </div>
                                                <div class="trending-list mt-4">
                                                   <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                      Moura, Boyd Holbrook, Joanna</span>
                                                   </div>
                                                   <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                      Action, Thriller, Biography</span>
                                                   </div>
                                                   <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                      Forceful</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data20" class="tab-pane fade ">
                                             <div
                                                class="trending-info  align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="d-flex align-items-center text-white text-detail mb-4">
                                                   <span class="season_date ml-2">
                                                   2 Seasons
                                                   </span>
                                                   <span class="trending-year">Feb 2019</span>
                                                </div>
                                                <div class="iq-custom-select d-inline-block sea-epi">
                                                   <select name="cars" class="form-control season-select">
                                                      <option value="season1">Season 1</option>
                                                      <option value="season2">Season 2</option>
                                                      <option value="season3">Season 3</option>
                                                   </select>
                                                </div>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body ">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">
                                                               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body ">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data21" class="tab-pane fade">
                                             <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data22" class="tab-pane fade">
                                             <div
                                                class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="swiper-slide swiper-bg slider-big-img-6">
                                 <div class="position-relative" >
                                    <div class="trending-custom-tab">
                                       <div class="tab-title-info position-relative">
                                          <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                                             <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="pill" href="#trending-data23"
                                                   role="tab" aria-selected="true">Overview</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data24" role="tab"
                                                   aria-selected="false">Episodes</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data25" role="tab"
                                                   aria-selected="false">Trailers</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#trending-data26" role="tab"
                                                   aria-selected="false">Similar Like This</a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="trending-content tab-content">
                                          <div id="trending-data23" class="tab-pane fade active show ">
                                             <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="res-logo">
                                                      <div class="channel-logo">
                                                         <img src="images/logo.png" class="c-logo" alt="streamit">
                                                      </div>
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="d-flex align-items-center text-white text-detail">
                                                   <span class="badge badge-secondary p-3">18+</span>
                                                   <span class="ml-3">3 Seasons</span>
                                                   <span class="trending-year">2020</span>
                                                </div>
                                                <div class="d-flex align-items-center series mb-4">
                                                   <a href="javascript:void(0);"><img src="images/trending/trending-label.png"
                                                      class="img-fluid" alt=""></a>
                                                   <span class="text-gold ml-3">#2 in Series Today</span>
                                                </div>
                                                <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting
                                                   industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                </p>
                                                <div class="p-btns">
                                                   <div class="d-flex align-items-center p-0">
                                                      <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" class="btn btn-hover mr-2" tabindex="0"><i
                                                         class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                      <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                      List</a>
                                                   </div>
                                                </div>
                                                <div class="trending-list mt-4">
                                                   <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                      Moura, Boyd Holbrook, Joanna</span>
                                                   </div>
                                                   <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                      Action, Thriller, Biography</span>
                                                   </div>
                                                   <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                      Forceful</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data24" class="tab-pane fade ">
                                             <div
                                                class="trending-info  align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="d-flex align-items-center text-white text-detail mb-4">
                                                   <span class="season_date ml-2">
                                                   2 Seasons
                                                   </span>
                                                   <span class="trending-year">Feb 2019</span>
                                                </div>
                                                <div class="iq-custom-select d-inline-block sea-epi">
                                                   <select name="cars" class="form-control season-select">
                                                      <option value="season1">Season 1</option>
                                                      <option value="season2">Season 2</option>
                                                      <option value="season3">Season 3</option>
                                                   </select>
                                                </div>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body ">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">
                                                               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body ">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data25" class="tab-pane fade">
                                             <div class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="watch-video.html" target="_blank">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="watch-video.html" target="_blank" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="watch-video.html" target="_blank">Trailer 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="trending-data26" class="tab-pane fade">
                                             <div
                                                class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="channel-logo">
                                                      <img src="images/logo.png" class="c-logo" alt="stramit">
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                <div class="episodes-contens mt-4">
                                                   <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/01.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 1</a>
                                                               <span class="text-primary">2.25 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/02.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 2</a>
                                                               <span class="text-primary">3.23 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/03.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 3</a>
                                                               <span class="text-primary">2 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/04.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 4</a>
                                                               <span class="text-primary">1.12 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="e-item">
                                                         <div class="block-image position-relative">
                                                            <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">
                                                            <img src="images/episodes/05.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="episode-play-info">
                                                               <div class="episode-play">
                                                                  <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" tabindex="0"><i
                                                                     class="ri-play-fill"></i></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="episodes-description text-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                               <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Episode 5</a>
                                                               <span class="text-primary">2.54 m</span>
                                                            </div>
                                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="swiper-arrow swiper-button-next"></div>
                        <div class="swiper-arrow swiper-button-prev"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->



         <section id="iq-tvthrillers" class="s-margin">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Recommended For You</h4>
                        <a href="view-all.html" class="text-primary iq-view-all">View All</a>
                     </div>
                  </div>
               </div>
               <!-- Swiper -->
               <div class="favourite-slider">
                  <div  class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                     <ul class="swiper-wrapper p-0 m-0">

                        @foreach($recomended_video as $recvideo)
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="{{ asset('uploads/video/thumbnail')}}/{{$recvideo->thubmnail_image}}" loading="lazy" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}">Shadow Warrior</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 50mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="{{ url('/details') }}/{{$latest->id}}/{{urlencode(Illuminate\Support\Str::slug($latest->title))}}" role="button" class="btn btn-hover"><i
                                       class="fa fa-play mr-1" aria-hidden="true"></i>
                                    Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">2+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        @endforeach
                     </ul>
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>
                  </div>
               </div>
            </div>
         </section>
      </div>
@endsection