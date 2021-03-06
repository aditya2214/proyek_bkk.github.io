@extends('suha.layouts.app')

@section('content')
<div>
     <!-- Header Area-->
     <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ url ('settings') }}">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Choose Language</h6>
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
    <!-- Page Content Wrapper-->
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Language Area-->
        <div class="language-area-wrapper py-3">
          <ul>
            <li>
              <input id="eng" type="radio" name="selector" checked>
              <label for="eng">English</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Afrikaans" type="radio" name="selector">
              <label for="Afrikaans">Afrikaans</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Albanian" type="radio" name="selector">
              <label for="Albanian">Albanian</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Arabic" type="radio" name="selector">
              <label for="Arabic">Arabic</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Azerbaijani" type="radio" name="selector">
              <label for="Azerbaijani">Azerbaijani</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Belarusian" type="radio" name="selector">
              <label for="Belarusian">Belarusian</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Bengali" type="radio" name="selector">
              <label for="Bengali">Bengali</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Bulgarian" type="radio" name="selector">
              <label for="Bulgarian">Bulgarian</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Catalan" type="radio" name="selector">
              <label for="Catalan">Catalan</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Cebuano" type="radio" name="selector">
              <label for="Cebuano">Cebuano</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Chichewa" type="radio" name="selector">
              <label for="Chichewa">Chichewa</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Dutch" type="radio" name="selector">
              <label for="Dutch">Dutch</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Filipino" type="radio" name="selector">
              <label for="Filipino">Filipino</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="French" type="radio" name="selector">
              <label for="French">French</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="German" type="radio" name="selector">
              <label for="German">German</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Hebrew" type="radio" name="selector">
              <label for="Hebrew">Hebrew</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Hindi" type="radio" name="selector">
              <label for="Hindi">Hindi</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Indonesian" type="radio" name="selector">
              <label for="Indonesian">Indonesian</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Italian" type="radio" name="selector">
              <label for="Italian">Italian</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Latvian" type="radio" name="selector">
              <label for="Latvian">Latvian</label>
              <div class="check"></div>
            </li>
            <li>
              <input id="Malayalam" type="radio" name="selector">
              <label for="Malayalam">Malayalam</label>
              <div class="check"></div>
            </li>
          </ul>
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