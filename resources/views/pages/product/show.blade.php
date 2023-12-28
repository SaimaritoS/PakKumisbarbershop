<x-web-layout title="Produk Detail">
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                        <div class="product-image">
                            <div class="product_img_box">
                                <img id="product_img" src="/images/{{$product->product_image}}">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pr_detail">
                            <div class="product_description d-inline-block">
                                <br>
                                <h4 class="product_title"><a href="#">{{$product->product_name}}</a></h4>
                                <div class="product_price">
                                    <span class="price"I>IDR {{$product->product_price}}</span>
                                </div>
                            </div>
                            <div class="cart_btn">
                                <a class="btn btn-fill-out btn-addtocart" href="{{route('add-cart', $product->id)}}" ><i class="icon-basket-loaded"></i>Masukkan Keranjang</a>
                            </div>
                            </div>
                                


                            <ul class="product-meta">
                                <li>Category: <a href="#">{{$product->product_category}}</a></li>
                            </ul>
                            
                        </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="large_divider clearfix"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                                  </li>
                            </ul>
                            <div class="tab-content shop_info_tab">
                                  <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                    <p>
                                        {{$product->product_description}}
                                    </p>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="small_divider"></div>
                        <div class="divider"></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->
        
        
    </div>
        <!-- END MAIN CONTENT -->
</x-web-layout>