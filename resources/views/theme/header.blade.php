<!-- LOADER -->
<div class="preloader">
  <div class="lds-ellipsis">
      <span></span>
      <span></span>
      <span></span>
  </div>
</div>
<!-- END LOADER -->

<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">
<div class="top-header">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-6">
                <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                      <ul class="contact_detail text-center text-lg-left">
                          <li><i class="fa fa-briefcase" aria-hidden="true"></i><span>10:00 - 22:00 WIB</span></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="text-center text-md-right">
                       <ul class="header_list">
                           @auth
                                <li><a href="{{route('auth.logout')}}" class="nav-link active"><span>Logout</span></a></li>
                           @endauth
                           @guest
                          <li><a href="{{route('auth.index')}}" class="nav-link active"><i class="ti-user "></i><span>Login</span></a></li>
                               
                           @endguest
                       </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="bottom_header dark_skin main_menu_uppercase">
    <div class="container">
          <nav class="navbar navbar-expand-lg"> 
              <a class="navbar-brand" href="#">
                  <h3>KUMIS BARBER</h3>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
                  <span class="ion-android-menu"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                      <li class="dropdown">
                          <a class="nav-link " href="{{url('dashboard')}}">Beranda</a> 
                      </li>
                      <li class="dropdown">
                          <a class=" nav-link" href="{{url('service')}}">Layanan</a>
                          
                      </li>
                      <li class="dropdown">
                        
                          @if(Auth::user()->isAdmin==true)
                          <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Produk</a>
                          <div class="dropdown-menu">
                              <ul> 
                                  <li><a class="dropdown-item nav-link nav_item" href="{{url('product')}}">Daftar Produk</a></li>
                                  <li><a class="dropdown-item nav-link nav_item" href="{{url('dataProduct')}}">Tabel Produk</a></li> 
                              </ul>
                          </div>
                        @else
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Produk</a>

                        <div class="dropdown-menu">
                            <ul> 
                                <li><a class="dropdown-item nav-link nav_item" href="{{url('product')}}">Daftar Produk</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/cart')}}">Keranjang</a></li> 
                            </ul>
                        </div>
                          @endif
                      </li>
                      
                      <li class="dropdown">
                        <a class="nav-link nav_item" href="{{route('appointment.index')}}">Janji Temu</a></li> 
                      </li>
                      <li>
                          <a class="nav-link" href="{{url('coupon')}}">Kupon</a>
                      </li> 
                      <li>
                        <a class="nav-link" href="{{url('/order')}}">Transaksi</a>
                      </li>
                  </ul>
              </div>
          </nav>
      </div>
  </div>
</header>