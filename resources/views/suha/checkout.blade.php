@extends('suha.layouts.app')

@section('content')
<div>
        <!-- Header Area-->
        <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ url ('cart') }}">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Billing Information</h6>
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
      <div class="container">
        <!-- Checkout Wrapper-->
        <div class="checkout-wrapper-area py-3">
          <!-- Billing Address-->
          <div class="billing-information-card mb-3">
            <div class="card billing-information-title-card bg-danger">
              <div class="card-body">
                <h6 class="text-center mb-0 text-white">Billing Information</h6>
              </div>
            </div>
            <div class="card user-data-card">
              <div class="card-body">                                   
                <div class="single-profile-data d-flex align-items-center justify-content-between">
                  <div class="title d-flex align-items-center"><i class="lni lni-user"></i><span>Full Name</span></div>
                  <div class="data-content">SUHA JANNAT</div>
                </div>
                <div class="single-profile-data d-flex align-items-center justify-content-between">
                  <div class="title d-flex align-items-center"><i class="lni lni-envelope"></i><span>Email Address</span></div>
                  <div class="data-content">care@example.com</div>
                </div>
                <div class="single-profile-data d-flex align-items-center justify-content-between">
                  <div class="title d-flex align-items-center"><i class="lni lni-phone"></i><span>Phone</span></div>
                  <div class="data-content">+880 000 111 222</div>
                </div>
                <div class="single-profile-data d-flex align-items-center justify-content-between">
                  <div class="title d-flex align-items-center"><i class="lni lni-map-marker"></i><span>Shipping Address</span></div>
                  <div class="data-content">28/C Green Road, BD</div>
                </div>
                <!-- Edit Address--><a class="btn btn-danger w-100" href="{{ url ('edit-profile') }}">Edit Billing Information</a>
              </div>
            </div>
          </div>
          <!-- Shipping Method Choose-->
          <div class="shipping-method-choose mb-3">
            <div class="card shipping-method-choose-title-card bg-success">
              <div class="card-body">
                <h6 class="text-center mb-0 text-white">Shipping Method Choose</h6>
              </div>
            </div>
            <div class="card shipping-method-choose-card">
              <div class="card-body">
                <div class="shipping-method-choose">
                  <ul class="ps-0">
                    <li>
                      <input id="fastShipping" type="radio" name="selector" checked>
                      <label for="fastShipping">Fast Shipping<span>1 days delivary for $1.0</span></label>
                      <div class="check"></div>
                    </li>
                    <li>
                      <input id="normalShipping" type="radio" name="selector">
                      <label for="normalShipping">Reguler<span>3-7 days delivary for $0.4</span></label>
                      <div class="check"></div>
                    </li>
                    <li>
                      <input id="courier" type="radio" name="selector">
                      <label for="courier">Courier<span>5-8 days delivary for $0.3</span></label>
                      <div class="check"></div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Cart Amount Area-->
          <div class="card cart-amount-area">
            <div class="card-body d-flex align-items-center justify-content-between">
              <h5 class="total-price mb-0">$<span class="counter">39.84</span></h5><a class="btn btn-warning" href="{{ url ('checkout-payment') }}">Confirm &amp; Pay</a>
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