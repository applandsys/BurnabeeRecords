@extends('layouts.front')
@section('content')
  
   <!-- Main container --> 
   <main id="main" class="site-main">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-sm-12">
                  <article>
                     <div class="iq-blog-box">
                        <div class="iq-blog-image">
                           <img width="1920" height="1080" src="{{ asset('uploads/blog/original_thumbnail')}}/{{$blog_detail->featured_image}}" loading="lazy" alt="" >				
                        </div>
                        <div class="iq-blog-detail">
                              <div class="iq-blog-meta">
                                 <ul class="list-inline">
                                 <li class="list-inline-item">
                                    <a href="#" class="iq-user"><i class="fa fa-user-o mr-1" aria-hidden="true"></i>{{$blog_detail->user->first_name}}</a>
                                 </li>
                                 <li class="list-inline-item">
                                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i>
                                    <span class="screen-reader-text">Posted on</span>
                                    <a href="#" rel="bookmark">
                                          <time  datetime="2019-02-02T12:46:15+00:00">{{ \Carbon\Carbon::parse($blog_detail->created_at)->format('d M Y')}}</time>
                                    </a>					
                                 </li>
                                 </ul>
                              </div>
                              <div class="blog-content">
                                 {!! $blog_detail->blog_content !!}
                              </div>
           
                        </div>
                     </div>
                        <div class="comments-area validate-form">
                              <div  class="comment-respond">
                                 <h3  class="comment-reply-title">Leave a Reply <small><a href="" style="display:none;">Cancel reply</a></small></h3>
                                 <form action="#" method="post"  class="comment-form" novalidate="">Your email address will not be published. Required fields are marked *<div class="comment-form-comment"><textarea name="comment" aria-required="true" placeholder="Comment"></textarea></div>
                                    <div class="row">
                                          <div class="col-lg-4">
                                             <div class="comment-form-author">
                                                <input id="author" name="author" aria-required="true" placeholder="Name*">
                                             </div>
                                          </div>
                                          <div class="col-lg-4">
                                             <div class="comment-form-email">
                                                <input id="email" name="email" placeholder="Email*">
                                             </div>
                                          </div>
                                          <div class="col-lg-4">
                                             <div class="comment-form-url">
                                                <input id="url" name="url" placeholder="Website">
                                             </div>
                                          </div>
                                    </div>
                                    <p class="comment-form-cookies-consent">
                                          <input  name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                          <label >Save my name, email, and website in this browser for the next time I comment.</label>
                                    </p>
                                    <p class="form-submit">
                                          <button name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                                             <span class="iq-btn-text-holder">Post Comment</span>
                                          </button>
                                          <input type="hidden" name="comment_post_ID" value="661" id="comment_post_ID">
                                          <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                    </p>
                                 </form>	
                              </div>
                              <div class=" error-msg" aria-hidden="true" style="display: none;">
                              </div>
                        </div>
                     
                  </article>
            </div>
            <div class="col-lg-4 col-sm-12">
                  <div class="widget-area">
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
                              @foreach($recent_blog as $recent)
                              <li>
                                 <div class="post-img">
                                    <div class="post-img-holder">
                                       <a href="#" style="background-image: url('{{ asset('uploads/blog/thumbnail')}}/{{$recent->featured_image}}');"></a>
                                    </div>
                                    <div class="post-blog">
                                       <div class="blog-box">
                                          <ul class="list-inline">
                                             <li class="list-inline-item  mr-3">
                                                <a class="date-widget" href="#"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>{{ \Carbon\Carbon::parse($blog_detail->created_at)->format('d M Y')}}</a>
                                             </li>
                                          </ul>
                                          <a class="new-link" href="#"><h6>{{$blog_detail->blog_title}}</h6></a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              @endforeach
                           
                           </ul>
                        </div>
                     </div>
                     <!-- <div id="archives-2" class="widget widget_archive">
                        <h5 class="widget-title">Archives</h5>
                        <ul>
                           <li><a href="#">February 2019</a></li>
                           <li><a href="#">January 2019</a></li>
                        </ul>
                     </div> -->
                     <div id="categories-2" class="widget widget_categories">
                        <h5 class="widget-title">Categories</h5>
                        <ul>
                           @foreach($category as $cat)
                           <li><a href="#">{{$cat->category_name}}</a></li>
                           @endforeach
                        </ul>
                     </div>
                     <div id="tag_cloud-2" class="widget widget_tag_cloud"><h5 class="widget-title">Tags</h5><div class="tagcloud">
                        <ul class="wp-tag-cloud" >
                           <li><a href="#" class="tag-cloud-link " >Action</a></li>

                        </ul>
                     </div>
                  </div>
                  <!-- <div id="recent-posts-2" class="widget widget_recent_entries">
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
                  </div> -->
                  <!-- <div id="meta-1" class="widget widget_meta">
                     <h5 class="widget-title">Meta</h5>
                     <ul>
                        <li><a href="#">Log in</a></li>
                        <li><a href="#">Entries feed</a></li>
                        <li><a href="#">Comments feed</a></li>
                        <li><a href="#">WordPress.org</a></li>
                     </ul>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
   </main>   <!-- Main container end -->
@endsection
