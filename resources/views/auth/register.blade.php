<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.components.topscript')
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            font-family: 'Arial', sans-serif;
        }

        .wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .card {
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            background: #fff;
        }

        .form-control {
            border-radius: 30px;
            padding: 15px;
            font-size: 14px;
        }

        .form-control:focus {
            box-shadow: 0 0 10px rgba(81, 203, 238, 1);
            border-color: #51cbee;
        }

        .btn-primary {
            border-radius: 30px;
            padding: 10px 20px;
            background: #6a11cb;
            border: none;
            transition: background 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background: #2575fc;
        }

        .navbar-brand svg {
            width: 100px;
        }

        .form-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .form-group {
            position: relative;
        }

        .form-group input {
            padding-left: 40px;
        }

        .requirements {
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="card">
            <div class="text-center mb-4">
                <a href="#">
                    <svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87" />
                            <polygon class="st0" points="96,69 33,69 42,51 105,51" />
                            <polygon class="st0" points="78,33 15,33 24,15 87,15" />
                        </g>
                    </svg>
                </a>
                <h2 class="my-3">Daftar Akun</h2>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <i class="form-icon fa fa-user"></i>
                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama Lengkap">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <i class="form-icon fa fa-envelope"></i>
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <hr class="my-4">

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <i class="form-icon fa fa-lock"></i>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Kata Sandi">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <i class="form-icon fa fa-lock"></i>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Kata Sandi">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-2">Syarat Kata Sandi</p>
                        <p class="requirements text-muted mb-2">Untuk membuat kata sandi baru, Anda harus memenuhi semua persyaratan berikut:</p>
                        <ul class="requirements text-muted pl-4 mb-0">
                            <li>Minimal 8 karakter</li>
                            <li>Minimal satu karakter khusus</li>
                            <li>Minimal satu angka</li>
                            <li>Tidak boleh sama dengan kata sandi sebelumnya</li>
                        </ul>
                    </div>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>
                <p class="mt-5 mb-3 text-muted text-center">© 2023</p>
            </form>
        </div>
    </div>
    @include('admin.components.bottomscript')
</body>
</html>
