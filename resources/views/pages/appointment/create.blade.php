<x-web-layout title="Janji Temu">
    
<div class="main_content">
    <!-- START LOGIN SECTION -->
    <div class="login_register_wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="text-danger text-center my-2 text-uppercase"> <i class="fa fa-exclamation" aria-hidden="true"></i> Saat anda membuat <b>janji temu</b> anda akan dikenakan biaya admin sebesar IDR 5000</div>

                    <div class="login_wrap">
                        
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1 text-center">
                                <h3>Janji Temu</h3>
                            </div>
                            <form method="post" action="{{route('appointment.store')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="name" placeholder="Nama Anda">
                                </div>
                                {{-- <div class="form-group">
                                    <input class="form-control" required="" type="number" name="no_hp" placeholder="No Telepon">
                                </div> --}}
                                <div class="form-group">
                                    <input class="form-control" required type="datetime-local" name="date_appointment">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" required name="deskripsi" placeholder="Deskripsi"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-fill-out btn-block" name="login">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOGIN SECTION -->
</div>

</x-web-layout>