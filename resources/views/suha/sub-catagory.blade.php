@extends('suha.layouts.app')

@section('content')
<div>
        <!-- Header Area-->
        <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ url ('catagory') }}">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Clothing</h6>
        </div>
        <!-- Filter Option-->
        <div class="filter-option" id="suhaNavbarToggler"><i class="lni lni-cog"></i></div>
      </div>
    </div>
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    <div class="suha-sidenav-wrapper filter-nav" id="sidenavWrapper">
      <!-- Catagory Sidebar Area-->
      <div class="catagory-sidebar-area">
        <!-- Catagory-->
        <div class="widget catagory mb-4">
          <h6 class="widget-title mb-3">Product Brand</h6>
          <div class="widget-desc">
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="zara" type="checkbox" checked>
              <label class="form-check-label font-weight-bold" for="zara">Zara</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="Gucci" type="checkbox">
              <label class="form-check-label font-weight-bold" for="Gucci">Gucci</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="Addidas" type="checkbox">
              <label class="form-check-label font-weight-bold" for="Addidas">Addidas</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="Nike" type="checkbox">
              <label class="form-check-label font-weight-bold" for="Nike">Nike</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="Denim" type="checkbox">
              <label class="form-check-label font-weight-bold" for="Denim">Denim</label>
            </div>
          </div>
        </div>
        <!-- Color-->
        <div class="widget color mb-4">
          <h6 class="widget-title mb-3">Color Family</h6>
          <div class="widget-desc">
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="Purple" type="checkbox" checked>
              <label class="form-check-label font-weight-bold" for="Purple">Purple</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="Black" type="checkbox">
              <label class="form-check-label font-weight-bold" for="Black">Black</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="White" type="checkbox">
              <label class="form-check-label font-weight-bold" for="White">White</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="Red" type="checkbox">
              <label class="form-check-label font-weight-bold" for="Red">Red</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="Pink" type="checkbox">
              <label class="form-check-label font-weight-bold" for="Pink">Pink</label>
            </div>
          </div>
        </div>
        <!-- Size-->
        <div class="widget size mb-4">
          <h6 class="widget-title mb-3">Size</h6>
          <div class="widget-desc">
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="XtraLarge" type="checkbox" checked>
              <label class="form-check-label font-weight-bold" for="XtraLarge">Xtra Large</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="Large" type="checkbox">
              <label class="form-check-label font-weight-bold" for="Large">Large</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="medium" type="checkbox">
              <label class="form-check-label font-weight-bold" for="medium">Medium</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="Small" type="checkbox">
              <label class="form-check-label font-weight-bold" for="Small">Small</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="ExtraSmall" type="checkbox">
              <label class="form-check-label font-weight-bold" for="ExtraSmall">Extra Small</label>
            </div>
          </div>
        </div>
        <!-- Ratings-->
        <div class="widget ratings mb-4">
          <h6 class="widget-title mb-3">Ratings</h6>
          <div class="widget-desc">
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="5star" type="checkbox" checked>
              <label class="form-check-label font-weight-bold" for="5star">5 star</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="4star" type="checkbox">
              <label class="form-check-label font-weight-bold" for="4star">4 star</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="3star" type="checkbox">
              <label class="form-check-label font-weight-bold" for="3star">3 star</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="2star" type="checkbox">
              <label class="form-check-label font-weight-bold" for="2star">2 star</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="1star" type="checkbox">
              <label class="form-check-label font-weight-bold" for="1star">1 star</label>
            </div>
          </div>
        </div>
        <!-- Payment Type-->
        <div class="widget payment-type mb-4">
          <h6 class="widget-title mb-3">Payment Type</h6>
          <div class="widget-desc">
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="cod" type="checkbox" checked>
              <label class="form-check-label font-weight-bold" for="cod">Cash On Delivery</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="paypal" type="checkbox">
              <label class="form-check-label font-weight-bold" for="paypal">Paypal</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="checkpayment" type="checkbox">
              <label class="form-check-label font-weight-bold" for="checkpayment">Check Payment</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="payonner" type="checkbox">
              <label class="form-check-label font-weight-bold" for="payonner">Payonner</label>
            </div>
            <!-- Single Checkbox-->
            <div class="form-check">
              <input class="form-check-input" id="mobbanking" type="checkbox">
              <label class="form-check-label font-weight-bold" for="mobbanking">Mobile Banking</label>
            </div>
          </div>
        </div>
        <!-- Apply Filter-->
        <div class="apply-filter-btn"><a class="btn btn-success" href="">Apply Filter</a></div>
      </div>
      <!-- Go Back Button-->
      <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
    </div>
    <div class="page-content-wrapper">
      <!-- Catagory Single Image-->
      <div class="pt-3">
        <div class="container">
          <div class="catagory-single-img" style="background-image: url('suha/dist/img/bg-img/5.jpg')"></div>
        </div>
      </div>
      <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Sub Catagory Products</h6>
          </div>
          <div class="row g-3">
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img class="mb-2" src="suha/dist/img/product/11.png" alt=""></a><a class="product-title d-block" href="{{ url ('single-product') }}">Beach Cap</a>
                  <p class="sale-price">$13<span>$42</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-primary">New</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img class="mb-2" src="suha/dist/img/product/5.png" alt=""></a><a class="product-title d-block" href="{{ url ('single-product') }}">Wooden Sofa</a>
                  <p class="sale-price">$74<span>$99</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img class="mb-2" src="suha/dist/img/product/6.png" alt=""></a><a class="product-title d-block" href="{{ url ('single-product') }}">Roof Lamp</a>
                  <p class="sale-price">$99<span>$113</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-danger">-15%</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img class="mb-2" src="suha/dist/img/product/9.png" alt=""></a><a class="product-title d-block" href="{{ url ('single-product') }}">Sneaker Shoes</a>
                  <p class="sale-price">$87<span>$92</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-danger">-11%</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img class="mb-2" src="suha/dist/img/product/8.png" alt=""></a><a class="product-title d-block" href="{{ url ('single-product') }}">Wooden Chair</a>
                  <p class="sale-price">$21<span>$25</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-warning">Hot</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img class="mb-2" src="suha/dist/img/product/4.png" alt=""></a><a class="product-title d-block" href="{{ url ('single-product') }}">Polo Shirts</a>
                  <p class="sale-price">$38<span>$41</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img class="mb-2" src="suha/dist/img/product/11.png" alt=""></a><a class="product-title d-block" href="{{ url ('single-product') }}">Beach Cap</a>
                  <p class="sale-price">$13<span>$42</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-primary">New</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img class="mb-2" src="suha/dist/img/product/5.png" alt=""></a><a class="product-title d-block" href="{{ url ('single-product') }}">Wooden Sofa</a>
                  <p class="sale-price">$74<span>$99</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img class="mb-2" src="suha/dist/img/product/6.png" alt=""></a><a class="product-title d-block" href="{{ url ('single-product') }}">Roof Lamp</a>
                  <p class="sale-price">$99<span>$113</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-danger">-15%</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img class="mb-2" src="suha/dist/img/product/9.png" alt=""></a><a class="product-title d-block" href="{{ url ('single-product') }}">Sneaker Shoes</a>
                  <p class="sale-price">$87<span>$92</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-danger">-11%</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img class="mb-2" src="suha/dist/img/product/8.png" alt=""></a><a class="product-title d-block" href="{{ url ('single-product') }}">Wooden Chair</a>
                  <p class="sale-price">$21<span>$25</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-warning">Hot</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img class="mb-2" src="suha/dist/img/product/4.png" alt=""></a><a class="product-title d-block" href="{{ url ('single-product') }}">Polo Shirts</a>
                  <p class="sale-price">$38<span>$41</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
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