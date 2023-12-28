<x-web-layout title="Masuk">
    <div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Masuk</h3>
                        </div>
                        <form method="post" action="{{route('auth.login')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control @error('username')is-invalid @enderror" name="username" placeholder="Your Username">
                                @error('username')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control @error('password')is-invalid @enderror" type="password" name="password" placeholder="Password">
                                @error('password')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
                            </div>
                            {{-- <div class="login_footer form-group">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                    
                                    </div>
                                </div>
                                <a href="#">Forgot password?</a>
                            </div> --}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Masuk</button>
                            </div>
                        </form>
                        <div class="different_login">
                            <span> or</span>
                        </div>
                        <div class="form-note text-center">Tidak memiliki akun? <a href="{{route('auth.index2')}}">Daftar Sekarang</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-web-layout>