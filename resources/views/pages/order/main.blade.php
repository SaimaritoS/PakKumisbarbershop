<x-web-layout title="Data Order">
  
 @if(Auth::user()->isAdmin==true)
 <div class="main_content">
    
  <div style="margin: 50px">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-10 col-md-10">
                  <table class="table">
                      <thead class="text-center">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Pembeli</th>
                          <th scope="col">Nama Produk</th>
                          <th scope="col">Jumlah</th>
                          <th scope="col">Total</th>
                          <th scope="col">Status</th>
                            @if(Auth::user()->isAdmin=true)
                            <th scope="col">Aksi</th>
                            @endif
                        </tr>
                      </thead>
                     
                      <tbody class="text-center">
                        @foreach($product as $index => $item)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$item->name}}</td>
                          <td>{{$item->product_name}}</td>
                          <td>{{$item->qty}}</td>
                          <td>{{$item->total}}</td>
                          <td>{{$item->status}}</td>
                          @if(Auth::user()->isAdmin==true)
                            <td>
                                <div class="dropdown">
                                    <a class="nav-link dropdown" data-toggle="dropdown" href="#"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu">
                                        <form action="{{route('order.terima', $item->id_order)}}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="dropdown-item nav-link nav_item">Terima</button>
                                        </form>
                                        <form action="{{route('order.tolak', $item->id_order)}}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="dropdown-item nav-link nav_item">Tolak</button>
                                        </form>
                                        
                                    </div> 
                                </div>
                            </td>
                            @endif
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
              </div>
          </div>
      </div>
  </div>
</div>
@elseif(Auth::user()->isAdmin==false)
<div class="main_content">
    
  <div style="margin: 50px">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-10 col-md-10">
                  <table class="table">
                      <thead class="text-center">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Pembeli</th>
                          <th scope="col">Nama Produk</th>
                          <th scope="col">Jumlah</th>
                          <th scope="col">Total</th>
                          <th scope="col">Status</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                     
                      <tbody class="text-center">
                        
                        @foreach($product as $index => $item)
                        @if(Auth::user()->id == $item->user_id)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$item->name}}</td>
                          <td>{{$item->product_name}}</td>
                          <td>{{$item->qty}}</td>
                          <td>{{$item->total}}</td>
                          <td>{{$item->status}}</td>
                            <td>
                              @if($item->status=="Terima" || $item->status=="Tolak")
                              Denied
                              @elseif($item->status="pending")
                              <div class="dropdown">
                                <a class="nav-link dropdown" data-toggle="dropdown" href="#"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu">
                                    <form action="{{route('order.batal', $item->id)}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="dropdown-item nav-link nav_item">Batal</button>
                                    </form>
                                </div> 
                            </div>
                            @endif

                            </td>
                        </tr>
                        @endif
                      @endforeach
                      
                      </tbody>
                    </table>
              </div>
          </div>
      </div>
  </div>
</div>
@endif
    </x-web-layout>
    