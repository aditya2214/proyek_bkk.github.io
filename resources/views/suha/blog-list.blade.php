@extends('suha.layouts.app')

@section('content')
<div>
       <!-- Header Area-->
       <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ url ('home') }}">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Blog List</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler d-flex justify-content-between flex-wrap" id="suhaNavbarToggler"><span></span><span></span><span></span></div>
      </div>
    </div>
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    <div class="suha-sidenav-wrapper" id="sidenavWrapper">
      <!-- Sidenav Profile-->
      @include('suha.auth')
      <!-- Go Back Button-->
      <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
    </div>
    <div class="page-content-wrapper">
      <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Blog List</h6>
            <!-- Layout Options-->
            <div class="layout-options"><a href="{{ url ('blog-grid') }}"><i class="lni lni-grid-alt"></i></a><a class="active" href="{{ url ('blog-list') }}"><i class="lni lni-radio-button"></i></a></div>
          </div>
          <div class="row g-3">
            <!-- Single Blog Card-->
            <div class="col-12 col-md-6">
              <div class="card blog-card list-card">
                <!-- Post Image-->
                <div class="post-img"><img src="suha/dist/img/bg-img/12.jpg" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bookmark"></i></a>
                <!-- Read More Button--><a class="btn btn-danger btn-sm read-more-btn" href="{{ url ('blog-details') }}">Read More</a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">Review</a>
                  <!-- Post Title--><a class="post-title d-block" href="{{ url ('blog-details') }}">The 5 best reviews in Suha</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap"><a href="#"><i class="lni lni-user"></i>Suha</a><span><i class="lni lni-timer"></i>2 min</span></div>
                </div>
              </div>
            </div>
            <!-- Single Blog Card-->
            <div class="col-12 col-md-6">
              <div class="card blog-card list-card">
                <!-- Post Image-->
                <div class="post-img"><img src="suha/dist/img/bg-img/13.jpg" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bookmark"></i></a>
                <!-- Read More Button--><a class="btn btn-warning btn-sm read-more-btn" href="{{ url ('blog-details') }}">Read for $0.9</a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">Shopping</a>
                  <!-- Post Title--><a class="post-title d-block" href="{{ url ('blog-details') }}">The best deals of this week</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap"><a href="#"><i class="lni lni-user"></i>Suha</a><span><i class="lni lni-timer"></i>4 min</span></div>
                </div>
              </div>
            </div>
            <!-- Single Blog Card-->
            <div class="col-12 col-md-6">
              <div class="card blog-card list-card">
                <!-- Post Image-->
                <div class="post-img"><img src="suha/dist/img/bg-img/14.jpg" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bookmark"></i></a>
                <!-- Read More Button--><a class="btn btn-danger btn-sm read-more-btn" href="{{ url ('blog-details') }}">Read More</a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">Tips</a>
                  <!-- Post Title--><a class="post-title d-block" href="{{ url ('blog-details') }}">5 tips for buy original products</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap"><a href="#"><i class="lni lni-user"></i>Suha</a><span><i class="lni lni-timer"></i>7 min</span></div>
                </div>
              </div>
            </div>
            <!-- Single Blog Card-->
            <div class="col-12 col-md-6">
              <div class="card blog-card list-card">
                <!-- Post Image-->
                <div class="post-img"><img src="suha/dist/img/bg-img/15.jpg" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bookmark"></i></a>
                <!-- Read More Button--><a class="btn btn-warning btn-sm read-more-btn" href="{{ url ('blog-details') }}">Read for $0.69</a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">Offer</a>
                  <!-- Post Title--><a class="post-title d-block" href="{{ url ('blog-details') }}">Mega Deals: Up to 75% discount</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap"><a href="#"><i class="lni lni-user"></i>Suha</a><span><i class="lni lni-timer"></i>8 min</span></div>
                </div>
              </div>
            </div>
            <!-- Single Blog Card-->
            <div class="col-12 col-md-6">
              <div class="card blog-card list-card">
                <!-- Post Image-->
                <div class="post-img"><img src="suha/dist/img/bg-img/16.jpg" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bookmark"></i></a>
                <!-- Read More Button--><a class="btn btn-danger btn-sm read-more-btn" href="{{ url ('blog-details') }}">Read More</a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">Trends</a>
                  <!-- Post Title--><a class="post-title d-block" href="{{ url ('blog-details') }}">Bridal shopping is the latest trends of this month</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap"><a href="#"><i class="lni lni-user"></i>Suha</a><span><i class="lni lni-timer"></i>6 min</span></div>
                </div>
              </div>
            </div>
            <!-- Single Blog Card-->
            <div class="col-12 col-md-6">
              <div class="card blog-card list-card">
                <!-- Post Image-->
                <div class="post-img"><img src="suha/dist/img/bg-img/17.jpg" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bookmark"></i></a>
                <!-- Read More Button--><a class="btn btn-warning btn-sm read-more-btn" href="{{ url ('blog-details') }}">Read for $0.33</a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">News</a>
                  <!-- Post Title--><a class="post-title d-block" href="{{ url ('blog-details') }}">How to easily buy a product</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap"><a href="#"><i class="lni lni-user"></i>Suha</a><span><i class="lni lni-timer"></i>3 min</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="section-heading pt-3">
            <h6>Read by category</h6>
          </div>
          <div class="row g-3">
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body"><a href="#"><i class="lni lni-quotation"></i><span class="d-block">Review</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body"><a href="#"><i class="lni lni-shopping-basket"></i><span class="d-block">Shopping</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body"><a href="#"><i class="lni lni-bulb"></i><span class="d-block">Tips</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body"><a href="#"><i class="lni lni-offer"></i><span class="d-block">Offer</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body"><a href="#"><i class="lni lni-bolt-alt"></i><span class="d-block">Trends</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body"><a href="#"><i class="lni lni-paperclip"></i><span class="d-block">News</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
      <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
          <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
            <li class="active"><a href="{{ url ('home') }}"><i class="lni lni-home"></i>Home</a></li>
            <li><a href="{{ url ('message') }}"><i class="lni lni-life-ring"></i>Support</a></li>
            <li><a href="{{ url ('cart') }}"><i class="lni lni-shopping-basket"></i>Cart</a></li>
            <li><a href="{{ url ('pages') }}"><i class="lni lni-heart"></i>Pages</a></li>
            <li><a href="{{ url ('settings') }}"><i class="lni lni-cog"></i>Settings</a></li>
          </ul>
        </div>
      </div>
    </div>
</div>
@endsection