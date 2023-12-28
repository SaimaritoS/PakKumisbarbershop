<x-web-layout title="Data Coupon">
  
@if(Auth::user()->isAdmin==true)
<div class="main_content">
  
  <div style="margin: 50px">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-10 col-md-10">
                @if(Auth::user()->isAdmin==true)
                <div class="row justify-content-end">
                <a href="{{route('coupon.create')}}" class="btn btn-danger my-2">Tambah</a>

                </div>
                @endif
                  <table class="table">
                      <thead class="text-center">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Kupon</th>
                          <th scope="col">Discount</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                     
                      <tbody class="text-center">
                        @foreach($coupon as $index => $item)
                        <tr>
                          <th scope="row">{{$item->id}}</th>
                          <td>{{$item->coupon_name}}</td>
                          <td>{{$item->discount}}</td>
                          <td>{{$item->status}}</td>
                          <td>
                              <div class="dropdown">
                                  <a class="nav-link dropdown" data-toggle="dropdown" href="#"><i class="fa fa-ellipsis-v"></i></a>
                                  <div class="dropdown-menu">
                                      <form action="{{route('coupon.terpakai', $item->id)}}" method="POST">
                                          @csrf
                                          @method('PATCH')
                                          <button type="submit" class="dropdown-item nav-link nav_item">Digunakan</button>
                                      </form>
                                  </div> 
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
                          <th scope="col">Nama Kupon</th>
                          <th scope="col">Discount</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                     
                      <tbody class="text-center">
                        
                        @foreach($coupon as $index => $item)
                        @if (Auth::user()->id == $item->user_id)
                        <tr>
                          <th scope="row">{{$item->id}}</th>
                          <td>{{$item->coupon_name}}</td>
                          <td>{{$item->discount}}</td>
                          <td>{{$item->status}}</td>
                          <td>
                            @if($item->status!="Terpakai")
                            <div class="dropdown">
                              <a class="nav-link dropdown" data-toggle="dropdown" href="#"><i class="fa fa-ellipsis-v"></i></a>
                              <div class="dropdown-menu">
                                  <form action="{{route('coupon.pakai', $item->id)}}" method="POST">
                                      @csrf
                                      @method('PATCH')
                                      <button type="submit" class="dropdown-item nav-link nav_item">Pakai</button>
                                  </form>
                                  <form action="{{route('coupon.batal', $item->id)}}" method="POST">
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
  