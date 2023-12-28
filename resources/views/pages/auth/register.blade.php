<x-web-layout title="Register">
    <div class="login_register_wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1">
                                <h3>Form Registrasi</h3>
                            </div>
                            <form method="post" action="{{route('auth.register')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="text"  class="form-control @error('email')is-invalid @enderror" name="email" placeholder="Email">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text"  class="form-control @error('username')is-invalid @enderror" name="username" placeholder="Nama Pengguna">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text"  class="form-control @error('name')is-invalid @enderror" name="name" placeholder="Nama Lengkap">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control  @error('password')is-invalid @enderror"  type="password" name="password" placeholder="Kata Sandi">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="login_footer form-group">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-fill-out btn-block" name="login">Daftar</button>
                                </div>
                            </form>
                            <div class="different_login">
                                <span> or</span>
                            </div>
                            <div class="form-note text-center">Sudah Memiliki Akun? <a href="{{route('auth.index')}}">Masuk Sekarang</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>