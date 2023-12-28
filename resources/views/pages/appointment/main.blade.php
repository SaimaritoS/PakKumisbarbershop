<x-web-layout title="Appointment">
  
<div class="main_content">

  <div style="margin: 50px">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-10 col-md-10">
                @if(Auth::user()->isAdmin==0)
                  <div class="row justify-content-end">
                    <a href="{{route('appointment.create')}}" class="btn btn-danger my-2">Tambah</a>
                  </div>
                @endif
                <table class="table">
                      <thead class="text-center">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Waktu</th>
                          <th scope="col">Deskripsi</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        @foreach ($appointment as $item)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$item->name}}</td>
                          <td>{{$item->date_appointment}}</td>
                          <td>{{$item->deskripsi}}</td>
                          <td>{{$item->status}}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="nav-link dropdown" data-toggle="dropdown" href="#"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu">
                                          @if(Auth::user()->isAdmin==true)
                                            <form action="{{route('appointment.terima', $item->id)}}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="dropdown-item nav-link nav_item">Terima</button>
                                            </form>
                                            <form action="{{route('appointment.tolak', $item->id)}}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="dropdown-item nav-link nav_item">Tolak</button>
                                            </form>
                                            @else
                                              @if (Auth::user()->id==$item->user_id)
                                                <form action="{{route('appointment.batal', $item->id)}}" method="POST">
                                                  @csrf
                                                  @method('PATCH')
                                                  <button type="submit" class="dropdown-item nav-link nav_item">Batal</button>
                                              </form>
                                              @endif
                                            @endif
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

</x-web-layout>