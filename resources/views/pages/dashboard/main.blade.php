<x-web-layout title="Beranda">
    <!-- START SECTION BANNER -->
    <div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
      <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active background_bg" data-img-src="{{asset('assets/img/banner.png')}}">
                  <div class="banner_slide_content">
                      <div class="container"><!-- STRART CONTAINER -->
                          <div class="row">
                              <div class="col-lg-7 col-9">
                                  <div class="banner_content overflow-hidden">
                                      <h2 class="staggered-animation text-white" data-animation="slideInLeft" data-animation-delay="1s">Kumis Barber</h2>
                                      <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase" href="https://wa.me/6287890782107" data-animation="slideInLeft" data-animation-delay="1.5s">Hubungi Kami</a>
                                  </div>
                              </div>
                          </div>
                      </div><!-- END CONTAINER-->
                  </div>
              </div>
              <div class="carousel-item background_bg" data-img-src="assets/img/banner.png">
                  <div class="banner_slide_content">
                      <div class="container"><!-- STRART CONTAINER -->
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="banner_content overflow-hidden">
                                      <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Kumis Barber</h2>
                                      <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase" href="{{url('product')}}" data-animation="slideInLeft" data-animation-delay="1.5s">Belanja Sekarang</a>
                                  </div>
                              </div>
                          </div>
                      </div><!-- END CONTAINER-->
                  </div>
              </div>
              <div class="carousel-item background_bg" data-img-src="assets/img/banner.png">
                  <div class="banner_slide_content">
                      <div class="container"><!-- STRART CONTAINER -->
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="banner_content overflow-hidden">
                                    <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">Atur Waktu Pertemuan</h5>
                                      <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Kumis Barber</h2>
                                      <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase" href="{{url('appointment')}}" data-animation="slideInLeft" data-animation-delay="1.5s">Buat Janji</a>
                                  </div>
                              </div>
                          </div>
                      </div><!-- END CONTAINER-->
                  </div>
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
      </div>
  </div>
  <!-- END SECTION BANNER -->
  
  <!-- END MAIN CONTENT -->
  <div class="main_content">
  
  <!-- START SECTION SHOP -->
  <div class="section small_pt pb_70">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
                <div class="heading_s1 text-center">
                    <h2>Exclusive Products</h2>
                  </div>
              </div>
      </div>
          <div class="row">
            <div class="col-12">
                <div class="tab-style1">
                      <ul class="nav nav-tabs justify-content-center" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true">Barbershop's Product</a>
                          </li>
                      </ul>
                  </div>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                          <div class="row shop_container">
                            @foreach ($product as $item)
                            <div class="col-lg-3 col-md-4 col-6 grid_item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="{{route('product.show', $item->id)}}">
                                            <img src="images/{{$item->product_image}}" class="img-fluid" style="width:300px; height:300px">
                                        </a>
                                    </div>
                                    <div class="product_info text-center">
                                        <h6 class="product_title"><a href="{{route('product.show', $item->id)}}">{{$item->product_name}}</a></h6>
                                        <div class="product_price">
                                            <span class="price">IDR {{$item->product_price}}</span>
                                        </div>
                                        @if(Auth::user()->isAdmin==false)
                                        <div>
                                            <a href="{{route('add-cart', $item->id)}}" class="product_price">Tambah <i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                          </div>
                      </div>
                  </div>
              </div>
          </div> 
      </div>
  </div>
  <!-- END SECTION SHOP -->
  
  </div>
  <!-- END MAIN CONTENT -->   
</x-web-layout>