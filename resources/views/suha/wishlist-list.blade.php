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
          <h6 class="mb-0">Wishlist</h6>
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
      <div class="sidenav-profile">
        <div class="user-profile"><img src="suha/dist/img/bg-img/9.jpg" alt=""></div>
        <div class="user-info">
          <h6 class="user-name mb-0">Suha Jannat</h6>
          <p class="available-balance">Balance <span>$<span class="counter">523.98</span></span></p>
        </div>
      </div>
      <!-- Sidenav Nav-->
      <ul class="sidenav-nav ps-0">
        <li><a href="{{ url ('profile') }}"><i class="lni lni-user"></i>My Profile</a></li>
        <li><a href="{{ url ('notifications') }}"><i class="lni lni-alarm lni-tada-effect"></i>Notifications<span class="ms-3 badge badge-warning">3</span></a></li>
        <li class="suha-dropdown-menu"><a href="#"><i class="lni lni-cart"></i>Shop Pages</a>
          <ul>
            <li><a href="{{ url ('shop-grid') }}">- Shop Grid</a></li>
            <li><a href="{{ url ('shop-list') }}">- Shop List</a></li>
            <li><a href="{{ url ('single-product') }}">- Product Details</a></li>
            <li><a href="{{ url ('featured-products') }}">- Featured Products</a></li>
            <li><a href="{{ url ('flash-sale') }}">- Flash Sale</a></li>
          </ul>
        </li>
        <li><a href="{{ url ('pages') }}"><i class="lni lni-empty-file"></i>All Pages</a></li>
        <li class="suha-dropdown-menu"><a href="{{ url ('wishlist-grid') }}"><i class="lni lni-heart"></i>My Wishlist</a>
          <ul>
            <li><a href="{{ url ('wishlist-grid') }}">- Wishlist Grid</a></li>
            <li><a href="{{ url ('wishlist-list') }}">- Wishlist List</a></li>
          </ul>
        </li>
        <li><a href="{{ url ('settings') }}"><i class="lni lni-cog"></i>Settings</a></li>
        <li><a href="{{ url ('intro') }}"><i class="lni lni-power-switch"></i>Sign Out</a></li>
      </ul>
      <!-- Go Back Button-->
      <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
    </div>
    <div class="page-content-wrapper">
      <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Your Wishlist (4)</h6>
            <!-- Layout Options-->
            <div class="layout-options"><a href="{{ url ('wishlist-grid') }}"><i class="lni lni-grid-alt"></i></a><a class="active" href="{{ url ('wishlist-list') }}"><i class="lni lni-radio-button"></i></a></div>
          </div>
          <div class="row g-3">
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img src="suha/dist/img/product/10.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="{{ url ('single-product') }}">Modern Red Sofa</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$64<span>$89</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.88 (39)</div><a class="btn btn-success btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><span class="badge badge-primary">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img src="suha/dist/img/product/7.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="{{ url ('single-product') }}">Office Chair</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$100<span>$160</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.82 (125)</div><a class="btn btn-success btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><span class="badge badge-danger">-10%</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img src="suha/dist/img/product/12.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="{{ url ('single-product') }}">Sun Glasses</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$24<span>$32</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.79 (63)</div><a class="btn btn-success btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><span class="badge badge-warning">New</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img src="suha/dist/img/product/13.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="{{ url ('single-product') }}">Wall Clock</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$31<span>$47</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.99 (7)</div><a class="btn btn-success btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Select All Products-->
            <div class="col-12">
              <div class="select-all-products-btn"><a class="btn btn-danger w-100" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-cart-check me-1" viewBox="0 0 16 16">
<path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>Add All To Cart</a></div>
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