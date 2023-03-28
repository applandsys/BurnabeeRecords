@extends('layouts.front')
@section('content')
   <div class="iq-main-slider site-video">
      <div class="container-fluid">
         @foreach($detail as $vid)
         <div class="row">
            <div class="col-lg-12">
               <div class="pt-0">
                  <video
                  id="my-video"
                  class="video-js vjs-big-play-centered w-100"
                  controls
                  preload="auto"
                  data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "{{$vid->youtube_iframe_link}}"}], "youtube": { "iv_load_policy": 1 } }'
               >
                  {{-- <source src="video/sample-video.mp4" type="video/mp4" />
                  <source src="MY_VIDEO.webm" type="video/webm" /> --}}
               </video>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
   <div class="main-content movi">
         <div >
            <div class="container-fluid">
            @foreach($detail as $vid)
               <div class="row">
                  <div class="col-lg-12">
                        <div class="trending-info mt-4 pt-0 pb-4">
                           <div class="row">
                              <div class="col-md-9 col-12  mb-auto">
                                    <div class="d-md-flex">
                                       <h3 class="trending-text big-title text-uppercase mt-0 fadeInLeft animated"
                                          data-animation-in="fadeInLeft" data-delay-in="0.6"
                                          style="opacity: 1; animation-delay: 0.6s">{{$vid->title}}
                                          </h3>
                                          <div class="slider-ratting d-flex align-items-center ml-md-3 ml-0">
                                          <ul
                                                class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-half" aria-hidden="true"></i></li>
                                          </ul>
                                          <span class="text-white ml-2">4.5</span>
                                       </div> 
                                    </div>
                                    <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-content">
                                       <li class="trending-list"><a class="text-primary title" href="#">Music</a></li>
                                    </ul>
                                    <div
                                       class="d-flex flex-wrap align-items-center text-white text-detail flex-wrap mb-4">
                                       <span class="badge badge-secondary font-size-16">Duration</span>
                                       <span class="ml-3 font-Weight-500 genres-info">{{$vid->videodatail->duration}} mins</span>
                                       <span class="trending-year trending-year-list font-Weight-500 genres-info">{{$vid->videodatail->release_year}}
                                       </span>
                                       <span
                                          class="trending-year trending-year-list single-view-count font-Weight-500 genres-info"><i
                                                class="fa fa-eye"></i> {{$vid->hitcounter->sum('raw_hits')}}  views</span>
                                    </div>

                                    <ul class="list-inline p-0 m-0 share-icons music-play-lists mb-1">
                                       <li class="share">
                                          <span><i class="ri-share-fill"></i></span>
                                          <div class="share-box">
                                             <div class="d-flex align-items-center">
                                                <a href="https://www.facebook.com/sharer?u={{ url('/details') }}/{{$vid->id}}/{{urlencode(Illuminate\Support\Str::slug($vid->title))}}" class="share-ico"><i class="ri-facebook-fill"></i></a>
                                                <a href="https://twitter.com/intent/tweet?text={{ url('/details') }}/{{$vid->id}}/{{urlencode(Illuminate\Support\Str::slug($vid->title))}}" class="share-ico"><i class="ri-twitter-fill"></i></a>
                                                <a href="{{ url('/details') }}/{{$vid->id}}/{{urlencode(Illuminate\Support\Str::slug($vid->title))}}" class="share-ico"><i class="ri-links-fill"></i></a>
                                             </div>
                                          </div>
                                       </li>
                                       <li><span><i class="ri-heart-fill"></i></span></li>
                                       <li><span><i class="ri-add-line"></i></span></li>
                                    </ul>
                                    <ul class="p-0 list-inline d-flex flex-wrap align-items-center mb-3 mt-4 iq_tag-list">
                                       <li class="text-primary text-lable mr-3"><i class="fa fa-tags" aria-hidden="true"></i>Tags:</li>
                                       <li class="trending-list mr-3"><a class="title" href="#">{{$vid->videodatail->tags}}</a></li>
                                    </ul>
                              </div>
                              <!-- <div class="trailor-video col-md-3 col-12 mt-lg-0 mt-4 mb-md-0 mb-1 text-lg-right">
                                    <a href="https://www.youtube.com/watch?v=QCGq1epI9pQ"
                                       class="video-open playbtn block-images position-relative playbtn_thumbnail">
                                       <img width="1920" height="1080" src="images/genre/37.jpg"
                                          class="attachment-medium-large size-medium-large wp-post-image" alt="" loading="lazy"
                                          />
                                       <span class="content btn btn-transparant iq-button">
                                          <i class="fa fa-play mr-2"></i>
                                          <span>Trailer Link</span>
                                       </span>
                                    </a>
                              </div>  -->
                           </div>
                        </div>
                        <div class="streamit-content-details trending-info g-border">
                           <ul class="trending-pills-header d-flex nav nav-pills align-items-center text-center  mb-5 justify-content-center"
                              role="tablist">
                              <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="pill" href="#dectripton-1" role="tab" aria-selected="true">Description</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#reviw-1" role="tab" aria-selected="false">Rate &amp; Review</a>
                              </li>
                       
                           </ul>
                           <div class="tab-content">
                              <div id="dectripton-1" class="tab-pane fade active show"
                                    role="tabpanel">
                                    <div class="description-content">
                                       <p>{{$vid->description}}</p>
                                    </div>
                              </div>
                              <div id="reviw-1" class="tab-pane fade" role="tabpanel">
                                    <div id="reviews" class="streamit-reviews">
                                       <div id="comments" class="comments-area validate-form">
                                          <p class="masvideos-noreviews mt-3">
                                                There are no reviews yet.
                                          </p>
                                       </div>
                                       <div id="review_form_wrapper">
                                          <div id="review_form">
                                                <div id="respond" class="comment-respond">
                                                   <h3 id="reply-title" class="comment-reply-title mt-0">
                                                      Be the first to review “{{$vid->title}}”
                                                   </h3>
                                                   <form  class="comment-form" action="{{route('home.submitReview')}}" method="POST">
                                                      @csrf
                                                      <input type="hidden" name="rating" value="">
                                                      <p class="comment-notes">
                                                            <span id="email-notes">Your email address will not be published.</span>
                                                            <span class="required-field-message" aria-hidden="true">Required fields are marked
                                                            <span class="required" aria-hidden="true">*</span></span>
                                                      </p>
                                                      <div class="comment-form-rating">
                                                            <label >Your rating</label>
                                                            <div class="star ml-3">
                                                               <span><i class="ri-star-line"></i></span>
                                                               <span><i class="ri-star-line"></i></span>
                                                               <span><i class="ri-star-line"></i></span>
                                                               <span><i class="ri-star-line"></i></span>
                                                               <span><i class="ri-star-line"></i></span>
                                                            </div>
                                                      </div>
                                                      <p class="comment-form-comment p-0 mb-3 mt-0">
                                                            <label for="comment">Your review&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
                                                      </p>
                                                      <p class="comment-form-author mt-3 pr-lg-3 pr-0">
                                                            <label for="author">Name&nbsp;<span class="required">*</span></label>
                                                            <input id="author" name="author" type="text" value="" size="30" required="" />
                                                      </p>
                                                      <p class="comment-form-email mt-3 pl-lg-3 pl-0">
                                                            <label for="email">Email&nbsp;<span class="required">*</span></label>
                                                            <input id="email" name="email" type="email" value="" size="30" required="" />
                                                      </p>
                                                      <p class="comment-form-cookies-consent">
                                                            <input id="coment-check" name="coment-check" type="checkbox" value="yes" />
                                                            <label for="coment-check">Save my name, email, and website in this browser for the next time I comment.</label>
                                                      </p>
                                                      <p class="form-submit">
                                                            <button name="submit" type="submit" id="submit"
                                                               class="btn btn-hover iq-button" value="Submit">
                                                               <span><i class="ri-play-fill"></i>Submit</span>
                                                            </button>
                                                      </p>
                                                   </form>
                                                </div>
                                                <!-- #respond -->
                                          </div>
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                              </div>
                           
                           </div>
                        </div>
                  </div>
               </div>
               @endforeach
            </div>
      </div>
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
@endsection
