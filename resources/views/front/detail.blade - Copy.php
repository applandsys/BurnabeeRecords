@extends('layouts.front')
@section('content')
   
<div class="main-content">
         <div class="show-movie">
            <div class="container-fluid">
               <div class="banner-wrapper overlay-wrapper iq-main-slider ">
                  <div class="banner-caption">
                     <div class="movie-detail">
                        @foreach($detail as $video)
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="trending-info p-0">
                                 <h1 class="trending-text big-title text-uppercase mt-0">{{$video->title}}</h1>
                                 <div class="slider-ratting d-flex align-items-center" data-animation-in="fadeInLeft">
                                    <ul
                                       class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                       <li>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       </li>
                                       <li>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       </li>
                                       <li>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       </li>
                                       <li>
                                          <i class="fa fa-star-half" aria-hidden="true"></i>
                                       </li>
                                    </ul>
                                    <span class="text-white ml-3">{{$video->duration}}</span>
                                 </div>
                                 <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-content">
                                    <li class="trending-list"><a class="text-primary title" href="tags/action.html">Action</a></li>
                                    <li class="trending-list"><a class="text-primary title" href="tags/adventure.html">Adventure</a></li>
                                    <li class="trending-list"><a class="text-primary title" href="tags/drama.html">Drama</a></li>
                              </ul>
                                 <div class="d-flex flex-wrap align-items-center text-white text-detail sesson-date">
                                    <span class="">
                                       2 Seasons </span>
                                    <span class="trending-year">Feb 2019</span>
                                 </div>
                                 <div class="trending-dec">
                                    <p class="m-0">The travels of a lone bounty hunter in the outer reaches of the galaxy,
                                       far from the
                                       authority of the New Republic.</p>
                                 </div>
                              </div>
                           </div>
                        </div>


                     </div>
                     <div class="position-relative">
                        <a href="show-detail.html"
                           class="d-flex align-items-center">
                           <div class="play-button">
                              <i class="ri-play-fill"></i>
                           </div>
                           <h4 class="w-name text-white font-weight-700">Watch latest Episode</h4>
                        </a>
                     </div>
                     <div class="row">
                        <div class="col-12 mt-auto mb-auto">
                           <ul class="list-inline p-0 m-0 share-icons music-play-lists">
                              <li class="share mb-0">
                                 <span><i class="ri-share-fill"></i></span>
                                 <div class="share-box">
                                    <div class="d-flex align-items-center">
                                       <a href="#" class="share-ico"><i class="ri-facebook-fill"></i></a>
                                       <a href="#" class="share-ico"><i class="ri-twitter-fill"></i></a>
                                       <a href="#" class="share-ico"><i class="ri-links-fill"></i></a>
                                    </div>
                                 </div>
                              </li>
                              <li class="mb-0">
                                 <span><i class="ri-heart-fill"></i></span>
                              </li>
                              <li class="mb-0">
                                 <span><i class="ri-add-line"></i></span>
                              </li>
                           </ul>
                           <ul
                              class="p-0 list-inline d-flex flex-wrap align-items-center movie-content movie-space-action flex-wrap iq_tag-list">
                              <li class="text-primary text-lable"><i class="fa fa-tags font-Weight-900"
                                    aria-hidden="true"></i>TAGS:</li>
                              <li> <a class="tag-list" href="tags/brother.html">Brother,</a>
                              </li>
                              <li><a class="tag-list" href="tags/brother-relationship.html">Brother
                                    Relationship,</a></li>
                              <li> <a class="tag-list" href="tags/king.html">King,</a>
                              </li>
                              <li> <a class="tag-list" href="tags/kings.html">kings</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="trailor-video  text-sm-right p-3  col-md-3 col-12">
                     <a href="{{$video->youtube_iframe_link}}"
                        class="video-open playbtn block-images position-relative playbtn_thumbnail ">
                        <img width="1920" height="1080" src="{{ asset('uploads/video/thumbnail')}}/{{$video->thubmnail_image}}"
                           class="attachment-medium-large size-medium-large wp-post-image" alt=""  loading="lazy"> <span class="content btn btn-transparant iq-button">
                           <i class=" mr-2"></i>
                           <span>Trailer Link</span>
                        </span>
                     </a>
                  </div>
               </div>
               <section class="show-movie-section">
                  <div class="iq-custom-select d-inline-block sea-epi">
                     <select name="cars" class="form-control season-select">
                        <option value="season1">Season 1</option>
                     </select>
                  </div>
                  <div class="trending-custom-tab">
                     <div class="tab-title-info position-relative">
                        <ul class="trending-pills nav nav-pills text-center iq-ltr-direction" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active show m-0" data-toggle="pill" href="#episodes" role="tab"
                                 aria-selected="true">Episodes</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link  m-0" data-toggle="pill" href="#feature-clips" role="tab"
                                 aria-selected="false">FEATURED CLIPS</a>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content" id="nav-tabContent">
                        <div id="episodes" class=" tab-pane animated fadeInUp active show">
                           <div class="row episodes list-inline p-0 mb-0 iq-rtl-direction ">
                              <div class="e-item col-lg-3 col-sm-12 col-md-6">
                                 <div class="block-image position-relative">
                                    <a href="show-details.html">
                                       <img src="images/tvthrillers/09.jpg" class="img-fluid img-zoom" alt="" loading="lazy">
                                    </a>
                                    <div class="episode-number">S01E01</div>
                                    <div class="episode-play-info">
                                       <div class="episode-play">
                                          <a
                                             href="show-detail.html">
                                             <i class="ri-play-fill"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="epi-desc p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                       <span class="text-white rel-date">October 1, 2020</span>
                                       <span class="text-primary run-time">45min</span>
                                    </div>
                                    <a
                                       href="show-detail.html">
                                       <h5 class="epi-name text-white mb-0">
                                          The Reckless 1</h5>
                                    </a>
                                 </div>
                              </div>
                              <div class="e-item col-lg-3 col-sm-12 col-md-6">
                                 <div class="block-image position-relative">
                                    <a href="show-details.html">
                                       <img src="images/tvthrillers/10.jpg" class="img-fluid img-zoom" alt="" loading="lazy">
                                    </a>
                                    <div class="episode-number">S01E02</div>
                                    <div class="episode-play-info">
                                       <div class="episode-play">
                                          <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="epi-desc p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                       <span class="text-white rel-date">October 8, 2020</span>
                                       <span class="text-primary run-time">35min</span>
                                    </div>
                                    <a
                                       href="show-detail.html">
                                       <h5 class="epi-name text-white mb-0">
                                          The Reckless 2</h5>
                                    </a>
                                 </div>
                              </div>
                              <div class="e-item col-lg-3 col-sm-12 col-md-6">
                                 <div class="block-image position-relative">
                                    <a href="show-details.html">
                                       <img src="images/tvthrillers/11.jpg" class="img-fluid img-zoom" alt="" loading="lazy">
                                    </a>
                                    <div class="episode-number">S01E03</div>
                                    <div class="episode-play-info">
                                       <div class="episode-play">
                                          <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="epi-desc p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                       <span class="text-white rel-date">October 15, 2020</span>
                                       <span class="text-primary run-time">36min</span>
                                    </div>
                                    <a
                                       href="show-detail.html">
                                       <h5 class="epi-name text-white mb-0">
                                          The Reckless 3</h5>
                                    </a>
                                 </div>
                              </div>
                              <div class="e-item col-lg-3 col-sm-12 col-md-6">
                                 <div class="block-image position-relative">
                                    <a href="show-details.html">
                                       <img src="images/tvthrillers/12.jpg" class="img-fluid img-zoom" alt="" loading="lazy">
                                    </a>
                                    <div class="episode-number">S01E04</div>
                                    <div class="episode-play-info">
                                       <div class="episode-play">
                                          <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="epi-desc p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                       <span class="text-white rel-date">October 22, 2020</span>
                                       <span class="text-primary run-time">41min</span>
                                    </div>
                                    <a
                                       href="show-detail.html">
                                       <h5 class="epi-name text-white mb-0">
                                          The Reckless 4</h5>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="feature-clips" class="tab-pane animated fadeInUp">
                           <div class="row episodes list-inline p-0 mb-0 iq-rtl-direction">
                              <div class="e-item col-lg-3 col-sm-12 col-md-6">
                                 <div class="block-image position-relative">
                                    <a href="show-details.html">
                                       <img src="images/tvthrillers/09.jpg" class="img-fluid img-zoom" alt="" loading="lazy">
                                    </a>
                                    <div class="episode-number">S01E01</div>
                                    <div class="episode-play-info">
                                       <div class="episode-play">
                                          <a
                                             href="show-detail.html">
                                             <i class="ri-play-fill"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="epi-desc p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                       <span class="text-white rel-date">October 1, 2020</span>
                                       <span class="text-primary run-time">45min</span>
                                    </div>
                                    <a
                                       href="show-detail.html">
                                       <h5 class="epi-name text-white mb-0">
                                          The Reckless 1 </h5>
                                    </a>
                                 </div>
                              </div>
                              <div class="e-item col-lg-3 col-sm-12 col-md-6">
                                 <div class="block-image position-relative">
                                    <a href="show-details.html">
                                       <img src="images/tvthrillers/10.jpg" class="img-fluid img-zoom" alt="" loading="lazy">
                                    </a>
                                    <div class="episode-number">S01E02</div>
                                    <div class="episode-play-info">
                                       <div class="episode-play">
                                          <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="epi-desc p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                       <span class="text-white rel-date">October 8, 2020</span>
                                       <span class="text-primary run-time">35min</span>
                                    </div>
                                    <a
                                       href="show-detail.html">
                                       <h5 class="epi-name text-white mb-0">
                                          The Reckless 2 </h5>
                                    </a>
                                 </div>
                              </div>
                              <div class="e-item col-lg-3 col-sm-12 col-md-6">
                                 <div class="block-image position-relative">
                                    <a href="show-details.html">
                                       <img src="images/tvthrillers/11.jpg" class="img-fluid img-zoom" alt="" loading="lazy">
                                    </a>
                                    <div class="episode-number">S01E02</div>
                                    <div class="episode-play-info">
                                       <div class="episode-play">
                                          <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="epi-desc p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                       <span class="text-white rel-date">October 8, 2020</span>
                                       <span class="text-primary run-time">35min</span>
                                    </div>
                                    <a
                                       href="show-detail.html">
                                       <h5 class="epi-name text-white mb-0">
                                          The Reckless 2 </h5>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <div id="iq-favorites" class="s-margin detail-cast-list iq-rtl-direction mt-0 starring">
                  <div class="row m-0">
                     <div class="col-sm-12 overflow-hidden p-0">
                        <div class="iq-main-header d-flex align-items-center justify-content-between iq-ltr-direction">
                           <h4 class="main-title">Starring</h4>
                        </div>
                        <div class="favorites-contens iq-smovie-slider">
                           <ul class="inner-slider list-inline row p-0  iq-ltr-direction">
                                 <li class=" slide-item iq-ltr-direction col-xl-3 col-lg-4 col-md-4 col-6">
                                    <div class="cast-images position-relative row mx-0">
                                       <div class="col-sm-4 col-12 img-box p-0">
                                             <img src="images\genre\43.jpg" class="person__poster--image img-fluid" alt="image" loading="lazy">
                                       </div>
                                       <div class="col-sm-8 col-12 block-description starring-desc ">
                                             <h6 class="iq-title">
                                                <a href="cast-karen-gilchrist.html" tabindex="0">
                                                   Karen gilchrist </a>
                                             </h6>
                                             <div class="video-time d-flex align-items-center my-2">
                                                <span class="text-white">As James</span>
                                             </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class=" slide-item iq-ltr-direction col-xl-3 col-lg-4 col-md-4 col-6">
                                    <div class="cast-images position-relative row mx-0">
                                       <div class="col-sm-4 col-12 img-box p-0">
                                             <img src="images\genre\42.jpg" class="person__poster--image" alt="image" loading="lazy">
                                       </div>
                                       <div class="col-sm-8 col-12 block-description starring-desc ">
                                             <h6 class="iq-title">
                                                <a href="cast-james-jones.html" tabindex="0">
                                                   James Chinlund </a>
                                             </h6>
                                             <div class="video-time d-flex align-items-center my-2">
                                                <span class="text-white">As James</span>
                                             </div>
                                       </div>
                                    </div>
                                 </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


@endsection