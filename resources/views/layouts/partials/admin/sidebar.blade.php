<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
       <a href="index.html" class="header-logo">
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
             <li><a href="{{ route('admin.dashboard') }}" class="text-primary"><i class="ri-arrow-right-line"></i><span>Visit site</span></a></li>
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
    
    
          </ul>
       </nav>
    </div>
 </div>
