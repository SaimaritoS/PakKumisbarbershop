<x-web-layout title="Tambah Produk">
    <!-- START LOGIN SECTION -->
<div style="margin: 50px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Tambah Produk</h3>
                        </div>
                        <form method="post" action='{{route('product.store')}}' enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="product_name" placeholder="Nama Produk">
                            </div>
                            <div class="form-group">
                                <input type="number" required="" class="form-control" name="product_price" placeholder="Harga Produk">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="number" name="product_stock" placeholder="Stok Produk">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required type="file" name="product_image" >
                            </div>
                            <div class="form-group">
                                <input class="form-control" required type="text" name="product_category" placeholder="Kategori Produk">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" required="" name="product_description" placeholder="Deskripsi"></textarea>
                            </div>

                            
                            <div class="form-group">
                                <button type='submit' class="btn btn-fill-out btn-block" name="login">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- END LOGIN SECTION -->
</x-web-layout>