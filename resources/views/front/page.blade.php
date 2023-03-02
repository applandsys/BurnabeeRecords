@extends('layouts.front')
@section('content')
   <main id="main" class="site-main">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-sm-12 mb-sm-4">
               <div class="text-center iq-title-box iq-title-default">
                  <h2 class="iq-title text-capitalize">
                    {{$page[0]->page_title}}
                  </h2>
                  <p class="iq-title-desc">  {{$page[0]->content}}</p>
               </div>
            </div>
         </div>
      </div>
   </main>
@endsection