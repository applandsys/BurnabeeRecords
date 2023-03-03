@php
   $settings =  App\Models\Setting::get();
@endphp
<footer id="contact" class="footer-one iq-bg-dark">
         <!-- Address -->
         <div class="footer-top">
            <div class="container-fluid">
               <div class="row footer-standard">
                  <div class="col-lg-6">
                     <div class="widget text-left">
                        <div class="menu-footer-link-1-container">
                           <ul id="menu-footer-link-1" class="menu p-0">
                              <li id="menu-item-7314"
                                 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7314">
                                 <a href="{{route('home.page','terms')}}">Terms Of Use</a>
                              </li>
                              <li id="menu-item-7316"
                                 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7316">
                                 <a href="{{route('home.page','privacy')}}">Privacy-Policy</a>
                              </li>
                              <li id="menu-item-701"
                                 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-701">
                                 <a href="{{route('home.page','faq')}}">FAQ</a>
                              </li>
                              <li id="menu-item-7118"
                                 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7118">
                                 <a href="{{route('home.watch-list')}}">Watch List</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="widget text-left">
                        <div class="textwidget">
                           <p><small>{{$settings[0]->footer_content }}</small>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                     <h6 class="footer-link-title">
                        Follow Us :
                     </h6>
                     <ul class="info-share">
    
                        <li><a target="_blank" href="{{ $settings[0]->facebook  }}"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="{{ $settings[0]->twitter  }}"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="{{ $settings[0]->instagram  }}"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="{{ $settings[0]->tiktok  }}"><i class="fa fa-tiktok"></i></a></li>
                        <li><a target="_blank" href="{{ $settings[0]->spotify  }}"><i class="fa fa-spotify"></i></a></li>
                        <li><a target="_blank" href="{{ $settings[0]->youtube  }}"><i class="fa fa-youtube"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                     <div class="widget text-left">
                        <div class="textwidget">
                           <h6 class="footer-link-title">Streamit App</h6>
                           <div class="d-flex align-items-center">
                              <a class="app-image" href="#">
                              <img src="{{ asset('assets/front_template/images/footer/01.jpg')}}" loading="lazy" alt="play-store">
                              </a><br>
                              <a class="ml-3 app-image" href="#"><img src="{{ asset('assets/front_template/images/footer/02.jpg')}}" loading="lazy" alt="app-store"></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Address END -->
      </footer>