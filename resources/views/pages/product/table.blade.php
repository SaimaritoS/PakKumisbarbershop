<x-web-layout title="Data Produk">
  
<div class="main_content">

  <div style="margin: 50px">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-10 col-md-10">
                <div class="row justify-content-end my-1">
                    <a class="btn btn-outline-danger" href="{{route('product.create')}}">Tambah Produk</a>
                </div>
                  <table class="table">
                      <thead class="text-center">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Produk</th>
                          <th scope="col">Harga</th>
                          <th scope="col">Stok</th>
                          <th scope="col">Kategori</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                     
                      <tbody class="text-center">
                        @foreach($product as $index => $item)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$item->product_name}}</td>
                          <td>{{$item->product_price}}</td>
                          <td>{{$item->product_stock}}</td>
                          <td>{{$item->product_category}}</td>
                          <td>
                              <div class="row justify-content-center">
                                  <a class="btn btn-outline-danger mx-1" href="{{route('product.edit', $item->id)}}">Edit</a>
                                  <form method="POST" action="{{route('product.destroy', $item->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger mx-1" type="submit">Hapus</button>
                                    </form>
                              </div>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
              </div>
          </div>
      </div>
  </div>
  </div>
</x-web-layout>
