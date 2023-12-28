<x-web-layout title="Produk">
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row align-items-center mb-4 pb-1">
                            <div class="col-12">
                                <div class="row justify-content-end">
                                </div>
                                <div class="product_header">
                                    <h2 class="text-danger">Daftar Produk</h2>
                                </div>
                            </div>
                        </div> 
                        <div class="row shop_container loadmore" data-item="8" data-item-show="4" data-finish-message="No More Item to Show" data-btn="Load More">
                            @foreach ($product as $item)
                            <div class="col-lg-3 grid_system mx-1" style="height:400px;">
                                <div class="product row justify-content-center">
                                    <div class="product_img ">
                                        <a href="{{route('product.show', $item->id)}}">
                                            <img src="images/{{$item->product_image}}" class="img-fluid" style="width:300px; height:300px">
                                        </a>
                                    </div>
                                    <div class="product_info text-center" style="height:100px;">
                                        <h6 class="product_title"><a href="{{route('product.show', $item->id)}}">{{$item->product_name}}</a></h6>
                                        <div class="product_price">
                                            <span class="price">IDR {{$item->product_price}}</span>
                                        </div>
                                        @if(Auth::user()->isAdmin==false)
                                        <div>
                                            <a href="{{url('add-cart', $item->id)}}" class="product_price">Tambah <i class="fa fa-shopping-cart"></i></a>
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
        <!-- END SECTION SHOP -->
    </div>
</x-web-layout>