@extends('layouts.front')
@section('content')
  
<main id="main" class="site-main">
      <div class="container">
         <div class="row">
               <div class="col-lg-8 col-sm-12">
                @foreach($blog_post as $list )
                  <article>
                     <div class="iq-blog-box">
                        <div class="iq-blog-image">
                           <img width="1920" height="1080" src="{{ asset('uploads/blog/thumbnail')}}/{{$list->featured_image}}" alt="{{$list->blog_title}}" >				
                        </div>
                        <div class="iq-blog-detail">
                           <div class="iq-blog-meta">
                              <ul class="list-inline">
                                 <li class="list-inline-item">
                                    <a href="#" class="iq-user"><i class="fa fa-user-o mr-1" aria-hidden="true"></i>admin</a>
                                 </li>
                                 <li class="list-inline-item">
                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i>
                                    <span class="screen-reader-text">Posted on</span>
                                    <a href="#" rel="bookmark">
                                       <time  datetime="{{$list->created_at}}">{{ \Carbon\Carbon::parse($list->created_at)->format('d M Y')}}</time>
                                    </a>					
                                 </li>
                              </ul>
                           </div>
                           <div class="blog-title">
                              <h3 class="entry-title">
                                 <a href="blog-details.html">
                                 {{$list->blog_title}}</a>
                                 </h3>
                           </div>
                           <div class="blog-content">
                              <p>     {{$list->blog_content}}.</p>
                           </div>
                           <div class="blog-button">
                              <a class="button-link" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                           </div>
                           <ul class="iq-blogcat">
                              <li class="iq-tag-title"><i class="fa fa-film" aria-hidden="true"></i> Categories:</li>
                              <li><a href="blog-details.html">Dramas</a></li>
                           </ul>
                           <ul class="iq-blogtag">
                              <li class="iq-tag-title">
                                 <i class="fa fa-tags" aria-hidden="true"></i> Tags:						
                              </li>
                              <li><a href="blog-details.html">comedy</a></li>
                              <li><a href="blog-details.html">Drama</a></li>
                              <li><a href="blog-details.html">Trailers</a></li>
                           </ul>
                        </div>
                     </div>
                  </article>
                  @endforeach
                 
                  <a class=" btn btn-hover iq-button">
                     <span>Load More</span>
                  </a>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="widget-area" >
                     <div id="search-2" class="widget widget_search">
                           <form method="get" class="search-form" action="#" autocomplete="off">
                              <label >
                                 <span class="input-group screen-reader-text">Search for:</span>
                              </label>
                              <input type="search" class="search-field search__input"  placeholder="Search" value="" name="s">
                              <button type="submit" class="search-submit">
                                 <i class="ri-search-line"></i>
                                 <span class="screen-reader-text">Search</span>
                              </button>
                           </form>
                     </div>
                     <div class="iq-widget-menu widget">
                           <h5 class="widget-title">Recent Post</h5>              
                           <div class="list-inline iq-widget-menu">
                              <ul class="iq-post">
                                 <li>
                                    <div class="post-img">
                                       <div class="post-img-holder">
                                          <a href="#" style="background-image: url('./images/blog/blog1.jpeg');"></a>
                                       </div>
                                       <div class="post-blog">
                                          <div class="blog-box">
                                             <ul class="list-inline">
                                                <li class="list-inline-item  mr-3 border-0">
                                                   <a class="date-widget" href="#"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>February 2, 2019</a>
                                                </li>
                                             </ul>
                                             <a class="new-link" href="blog-details.html"><h6>The Most Anticipated Movies</h6></a>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="post-img">
                                       <div class="post-img-holder">
                                          <a href="#" style="background-image: url('./images/blog/blog2.jpeg');"></a>
                                       </div>
                                       <div class="post-blog">
                                          <div class="blog-box">
                                             <ul class="list-inline">
                                                <li class="list-inline-item  mr-3 border-0"><a class="date-widget" href="#"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>February 2, 2019</a></li>
                                             </ul>
                                             <a class="new-link" href="blog-details.html"><h6>Amy Adams Always Dreamed</h6></a>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="post-img">
                                       <div class="post-img-holder">
                                          <a href="#" style="background-image: url(./images/blog/blog3.jpeg);"></a>
                                       </div>
                                       <div class="post-blog">
                                          <div class="blog-box">
                                             <ul class="list-inline">
                                                <li class="list-inline-item  mr-3 border-0"><a class="date-widget" href="#"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>February 2, 2019</a></li>
                                             </ul>
                                             <a class="new-link" href="blog-details.html"><h6>WandaVision Will Reveal Scarlet Witch’s Untapped Powers</h6></a>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div id="archives-2" class="widget widget_archive">
                           <h5 class="widget-title">Archives</h5>
                           <ul>
                              <li><a href="#">February 2019</a></li>
                              <li><a href="#">January 2019</a></li>
                           </ul>
                        </div>
                        <div id="categories-2" class="widget widget_categories">
                           <h5 class="widget-title">Categories</h5>
                           <ul>
                              <li><a href="#">Dramas</a></li>
                              <li><a href="#">Historical</a></li>
                              <li><a href="#">Movie</a></li>
                              <li><a href="#">Movie Trailers</a></li>
                              <li><a href="#">Trailers</a></li>
                              <li><a href="#">TV Comedies</a></li>
                              <li><a href="#">TV Rumors</a></li>
                              <li><a href="#">TV Series</a></li>
                           </ul>
                        </div>
                        <div id="tag_cloud-2" class="widget widget_tag_cloud"><h5 class="widget-title">Tags</h5><div class="tagcloud">
                           <ul class="wp-tag-cloud" >
                              <li><a href="#" class="tag-cloud-link " >Action</a></li>
                              <li><a href="#" class="tag-cloud-link ">Comedies</a></li>
                              <li><a href="#" class="tag-cloud-link ">comedy</a></li>
                              <li><a href="#" class="tag-cloud-link ">Drama</a></li>
                              <li><a href="#" class="tag-cloud-link ">Dramas</a></li>
                              <li><a href="#" class="tag-cloud-link ">Historical</a></li>
                              <li><a href="#" class="tag-cloud-link ">horr</a></li>
                              <li><a href="#" class="tag-cloud-link ">Horror</a></li>
                              <li><a href="#" class="tag-cloud-link ">Movie</a></li>
                              <li><a href="#" class="tag-cloud-link">Movie Trailers</a></li>
                              <li><a href="#" class="tag-cloud-link">Mystery</a></li>
                              <li><a href="#" class="tag-cloud-link">Rumors</a></li>
                              <li><a href="#" class="tag-cloud-link">thrill</a></li>
                              <li><a href="#" class="tag-cloud-link">Thriller</a></li>
                              <li><a href="#" class="tag-cloud-link">Trailers</a></li>
                              <li><a href="#" class="tag-cloud-link ">Tv Rumors</a></li>
                              <li><a href="#" class="tag-cloud-link">TV Series</a></li>
                           </ul>
                        </div>
                     </div>
                     <div id="recent-posts-2" class="widget widget_recent_entries">
                        <h5 class="widget-title">Recent Posts</h5>
                        <ul>
                           <li>
                              <a href="#">The Most Anticipated Movies</a>
                           </li>
                           <li>
                              <a href="#">Amy Adams Always Dreamed</a>
                           </li>
                           <li>
                              <a href="#">WandaVision Will Reveal Scarlet Witch’s Untapped Powers</a>
                           </li>
                           <li>
                              <a href="#">Everything You Need to Know About</a>
                           </li>
                           <li>
                              <a href="#">My streaming Black Pearl</a>
                           </li>
                        </ul>
                     </div>
                     <div id="meta-1" class="widget widget_meta">
                        <h5 class="widget-title">Meta</h5>
                        <ul>
                           <li><a href="#">Log in</a></li>
                           <li><a href="#">Entries feed</a></li>
                           <li><a href="#">Comments feed</a></li>
                           <li><a href="#">WordPress.org</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </main>
   <!-- Main container end -->
@endsection
