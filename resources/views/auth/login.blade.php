<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.components.topscript')
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            font-family: 'Arial', sans-serif;
        }

        .card {
            border-radius: 15px;
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

        .login-container {
            max-width: 400px;
            margin: auto;
            padding-top: 100px;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .remember-me input {
            margin-right: 5px;
        }

        .login-footer {
            font-size: 14px;
            color: #fff;
        }

        .login-footer a {
            color: #f8f9fa;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="card shadow-lg">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
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
                    </div>
                    <h3 class="h5 text-center mb-4 text-dark">Selamat Datang</h3>

                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="remember-me mb-3">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">Ingat Saya</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Masuk</button>

                    <div class="text-center mt-3">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Lupa Kata Sandi?</a>
                        @endif
                    </div>
                </form>

                <div class="login-footer text-center mt-4">
                    Belum punya akun? <a href="{{ route('register') }}">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    @include('admin.components.bottomscript')
</body>
</html>
