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
          <h6 class="mb-0">Shop List</h6>
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
      <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>All Products</h6>
            <!-- Select Product Catagory-->
            <div class="select-product-catagory">
              <select class="form-select" id="selectProductCatagory" name="selectProductCatagory" aria-label="Default select example">
                <option selected>Short by</option>
                <option value="1">Newest</option>
                <option value="2">Popular</option>
                <option value="3">Ratings</option>
              </select>
            </div>
          </div>
          <div class="product-catagories">
            <div class="row g-3">
              <!-- Single Catagory-->
              <div class="col-4"><a class="shadow-sm" href="#"><img src="suha/dist/img/product/5.png" alt="">Furniture</a></div>
              <!-- Single Catagory-->
              <div class="col-4"><a class="shadow-sm" href="#"><img src="suha/dist/img/product/9.png" alt="">Shoes</a></div>
              <!-- Single Catagory-->
              <div class="col-4"><a class="shadow-sm" href="#"><img src="suha/dist/img/product/4.png" alt="">Dress</a></div>
            </div>
          </div>
          <div class="row g-3">
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img src="suha/dist/img/product/10.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="{{ url ('single-product') }}">Modern Red Sofa</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$64<span>$89</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.88 (39)</div><a class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
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
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.82 (125)</div><a class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
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
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.79 (63)</div><a class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
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
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.99 (7)</div><a class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="{{ url ('single-product') }}"><img src="suha/dist/img/product/10.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="{{ url ('single-product') }}">Modern Red Sofa</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$64<span>$89</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.88 (39)</div><a class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
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
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.82 (125)</div><a class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
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
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.79 (63)</div><a class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
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
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.99 (7)</div><a class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
                  </div>
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