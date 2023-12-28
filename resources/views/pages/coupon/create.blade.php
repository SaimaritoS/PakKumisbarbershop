<x-web-layout title="Kupon">
    <div class="main_content">

        <!-- START LOGIN SECTION -->
        <div style="margin: 50px">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-10">
                        <div class="login_wrap">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <h3>Tambah Discount</h3>
                                </div>
                                <form method="post" action="{{route('coupon.store')}}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" required="" class="form-control" name="coupon_name" placeholder="Nama Coupon">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" required type="number" name="discount" placeholder="Diskon">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control custom-select" name="user_id">
                                            <option selected>Choose...</option>
                                            @foreach ($user as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="btn btn-fill-out btn-block" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>