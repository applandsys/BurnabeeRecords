<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
       <a href="{{route('admin.dashboard')}}" class="header-logo">
          <img src="{{ asset('assets/admin_template/images/logo.png')}}" class="img-fluid rounded-normal" alt="">
          <div class="logo-title">
             <!-- <span class="text-primary text-uppercase">Burnabee</span> -->
          </div>
       </a>
       <div class="iq-menu-bt-sidebar">
          <div class="iq-menu-bt align-self-center">
             <div class="wrapper-menu">
                <div class="main-circle"><i class="las la-bars"></i></div>
             </div>
          </div>
       </div>
    </div>
    <div id="sidebar-scrollbar">
       <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">
             <li><a href="{{ route('home_page') }}" class="text-primary" target="_blank"><i class="ri-arrow-right-line"></i><span>Visit site</span></a></li>
             <li class="active active-menu"><a href="{{ route('admin.dashboard') }}" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>Dashboard</span></a></li>
             <li><a href="{{ route('admin.ratingList') }}" class="iq-waves-effect"><i class="las la-star-half-alt"></i><span>Rating </span></a></li>
             <li><a href="{{ route('admin.reviewList') }}" class="iq-waves-effect"><i class="las la-comments"></i><span>Comment</span></a></li>
             <li><a href="{{ route('admin.userList') }}" class="iq-waves-effect"><i class="las la-user-friends"></i><span>User</span></a></li>
             
             <li>
                <a href="#category" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-list-ul"></i><span>Category</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="category" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{ route('admin.addCategory')}}"><i class="las la-user-plus"></i>Add Category</a></li>
                   <li><a href="{{ route('admin.categoryList')}}"><i class="las la-eye"></i>Category List</a></li>
                </ul>
             </li>

             <li>
                <a href="#movie" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Content</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="movie" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{route('admin.addMovie')}}"><i class="las la-user-plus"></i>Add Video</a></li>
                   <li><a href="{{route('admin.movieList')}}"><i class="las la-eye"></i>Video List</a></li>
                </ul>
             </li>

             <li>
                <a href="#slider" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Slider</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="slider" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{route('admin.sliderList')}}"><i class="las la-user-plus"></i> Slider List</a></li>
                </ul>
             </li>


             <li>
                <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{route('admin.pageList')}}"><i class="las la-list-ul"></i> Page List</a></li>
                </ul>
             </li>

             <li>
                <a href="#blog" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Blog</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="blog" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{route('admin.blogList')}}"><i class="las la-list-ul"></i> Blog List</a></li>
                   <li><a href="{{route('admin.addBlog')}}"><i class="las la-list-ul"></i> Add  Blog</a></li>
                </ul>
             </li>


             <li>
                <a href="#celebrity" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Celebrity</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="celebrity" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{route('admin.celebrityList')}}"><i class="las la-list-ul"></i> Celebrity List</a></li>
                   <li><a href="{{route('admin.addCelebrity')}}"><i class="las la-list-ul"></i> Add  Celebrity</a></li>
                </ul>
             </li>

             <li>
                <a href="#settings" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Contact</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="settings" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{route('admin.Settings')}}"><i class="las la-list-ul"></i> All Contact Message</a></li>
                   <li><a href="{{route('admin.Settings')}}"><i class="las la-list-ul"></i> New Contact Message</a></li>
                </ul>
             </li>


             <li>
                <a href="#settings" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Settings</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="settings" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{route('admin.Settings')}}"><i class="las la-list-ul"></i> General Settings</a></li>
                </ul>
             </li>
    

          </ul>
       </nav>
    </div>
 </div>
