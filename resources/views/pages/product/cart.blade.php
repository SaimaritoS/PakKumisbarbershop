<x-web-layout title="Keranjang">

    <div class="main_content">
    
      <div style="margin: 50px">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-xl-10 col-md-10">
                      <table class="table">
                          <thead class="text-center">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama Produk</th>
                              <th scope="col">Gambar Produk</th>
                              <th scope="col">Qty</th>
                              <th scope="col">Kategori</th>
                              <th scope="col">Harga</th>
                              <th>Sub Total</th>
                              <th scope="col">Aksi</th>
                            </tr>
                          </thead>
                         
                          <tbody class="text-center">
                              @php $grandtotal = 0; @endphp
                              @if(session('cart'))
                                    @foreach(session('cart') as $id => $item)
                                    @php $subtotal = $item['product_price'] * $item['qty'];@endphp
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$item['product_name']}}</td>
                                        <td><img src="images/{{$item['product_image']}}" style="width: 20%"/></td>
                                        <td>{{$item['qty']}}</td>
                                        <td>{{$item['product_category']}}</td>
                                        <td>{{$item['product_price']}}</td>
                                        <td>{{$subtotal}}</td>
                                        <td>
                                            <a href="{{route('remove',$id)}}" class="btn btn-danger">X</a></td>
                                    </tr>
                                    @php $grandtotal+=$subtotal;@endphp
                                @endforeach
                                
                                <tr>
                                    <th colspan="4">Grand Total</th>
                                    <td colspan="2">{{$grandtotal}}</td>
                                </tr>
                            @endif
                          </tbody>
                        </table>
                        <div class="m-3 row justify-content-between">
                          <a href="{{url('product')}}" class="btn btn-danger">Lanjut Belanja</a>
                          <a href="{{url('/buy')}}" class="btn btn-danger">Beli</a>
                        </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    </x-web-layout>
  