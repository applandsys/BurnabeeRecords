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
                  <source src="video/sample-video.mp4" type="video/mp4" />
                  <source src="MY_VIDEO.webm" type="video/webm" />
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
                                          <span class="text-white ml-2">3.5 (lmdb)</span>
                                       </div>
                                    </div>
                                    <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-content">
                                       <li class="trending-list"><a class="text-primary title" href="tags/thriller.html">Thriller</a></li>
                                    </ul>
                                    <div
                                       class="d-flex flex-wrap align-items-center text-white text-detail flex-wrap mb-4">
                                       <span class="badge badge-secondary font-size-16">G</span>
                                       <span class="ml-3 font-Weight-500 genres-info">2hr : 42mins</span>
                                       <span class="trending-year trending-year-list font-Weight-500 genres-info">Nov 2017
                                       </span>
                                       <span
                                          class="trending-year trending-year-list single-view-count font-Weight-500 genres-info"><i
                                                class="fa fa-eye"></i>1449 views</span>
                                    </div>
                                 
                                    <ul class="list-inline p-0 m-0 share-icons music-play-lists mb-1">
                                       <li class="share">
                                          <span><i class="ri-share-fill"></i></span>
                                          <div class="share-box">
                                             <div class="d-flex align-items-center">
                                                <a href="#" class="share-ico"><i class="ri-facebook-fill"></i></a>
                                                <a href="#" class="share-ico"><i class="ri-twitter-fill"></i></a>
                                                <a href="#" class="share-ico"><i class="ri-links-fill"></i></a>
                                             </div>
                                          </div>
                                       </li>
                                       <li><span><i class="ri-heart-fill"></i></span></li>
                                       <li><span><i class="ri-add-line"></i></span></li>
                                    </ul>
                                    <ul class="p-0 list-inline d-flex flex-wrap align-items-center mb-3 mt-4 iq_tag-list">
                                       <li class="text-primary text-lable mr-3"><i class="fa fa-tags" aria-hidden="true"></i>Tags:</li>
                                       <li class="trending-list mr-3"><a class="title" href="tags/adventure.html">Adventure,</a></li>
                                       <li class="trending-list mr-3"><a class="title" href="tags/comedy.html">Comedy,</a></li>
                                       <li class="trending-list mr-3"><a class="title" href="tags/thriller.html">Thriller</a></li>
                                    </ul>
                              </div>
                              <div class="trailor-video col-md-3 col-12 mt-lg-0 mt-4 mb-md-0 mb-1 text-lg-right">
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
                              </div>
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
                              <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#sourse-1" role="tab" aria-selected="false">Sources</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div id="dectripton-1" class="tab-pane fade active show"
                                    role="tabpanel">
                                    <div class="description-content">
                                       <p>The most brutal emperor in the history of world.He was the founder of the most contiguous empire of the world i.e. the Mongol empire.He made an army by himself by uniting some nomadic tribes and trained them.</p>
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
                                                      Be the first to review “Zombie-island 2”
                                                   </h3>
                                                   <form  class="comment-form">
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
                              <div id="sourse-1" class="tab-pane fade" role="tabpanel">
                                    <div class="source-list-content">
                                       <table class="movie-sources sources-table">
                                          <thead class="trending-pills">
                                                <tr>
                                                   <th class="genres-table-heading">Links</th>
                                                   <th class="genres-table-heading">Quality</th>
                                                   <th class="genres-table-heading">Language</th>
                                                   <th class="genres-table-heading">Player</th>
                                                   <th class="genres-table-heading">Date Added</th>
                                                </tr>
                                          </thead>
                                          <tbody class="trending-pills">
                                                <tr>
                                                   <td>
                                                      <a href="movie-details.html" class="play-source movie-play-source btn-hover iq-button"><i class="ri-play-fill"></i>
                                                            Play Now
                                                      </a>
                                                   </td>
                                                   <td>1080p</td>
                                                   <td>english</td>
                                                   <td>MediaMonkey</td>
                                                   <td>2021-12-04</td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <a href="movie-details.html" class="play-source movie-play-source btn-hover iq-button"><i class="ri-play-fill"></i>
                                                         Play Now
                                                   </a>
                                                   </td>
                                                   <td>800p</td>
                                                   <td>english</td>
                                                   <td>MusicBee</td>
                                                   <td>2021-12-02</td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
               @endforeach
            </div>
      </div>
      <section class="iq-genres-section show-movie">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">
                           <h4 class="main-title">Latest Episodes</h4>
                     </div>
                        </div>
                        <div class="e-item col-lg-3 col-6">
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
                     <div class="e-item col-lg-3 col-6">
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
                     <div class="e-item col-lg-3 col-6">
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
                     <div class="e-item col-lg-3 col-6">
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
      </section>
      </div>

@endsection