<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f0f2f5;
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 600;
        }

        .form-label {
            color: #333;
            font-weight: 600;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ccc;
            box-shadow: none;
            font-size: 16px;
            padding: 12px;
        }

        .form-control:focus {
            border-color: #0069d9;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }

        .btn-primary {
            background-color: #0069d9;
            border-color: #0062cc;
            font-size: 16px;
            font-weight: 600;
            padding: 12px;
            border-radius: 10px;
            width: 100%;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .forgot-password {
            text-align: right;
            margin-top: 10px;
        }

        .forgot-password a {
            color: #0069d9;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        /* Add custom background for the page */
        .container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
        }

        /* Custom padding for input fields */
        .mb-3 {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-container">
            <h1 class="text-center">ĐĂNG NHẬP</h1>
    
            <!-- Hiển thị thông báo lỗi hoặc thành công -->
            @if (session('error'))
                <div class="alert alert-danger">
                        <strong>Lỗi:</strong> {{ session('error') }}
                    </div>
            @endif

            @if (session('success'))
                    <div class="alert alert-success">
                        <strong>Thành công:</strong> {{ session('success') }}
                    </div>
            @endif 
    
            <form action="{{ route('nhdadmins.nhdLoginSubmit') }}" method="POST">
                @csrf
    
                <div class="mb-3">
                    <label for="nhdTaiKhoan" class="form-label">Tên tài khoản</label>
                    <input
                        type="text"
                        class="form-control"
                        id="nhdTaiKhoan"
                        name="nhdTaiKhoan"
                        required
                        autofocus
                    />
                    @error('nhdTaiKhoan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="nhdMatKhau" class="form-label">Mật khẩu</label>
                    <input
                        type="password"
                        class="form-control"
                        id="nhdMatKhau"
                        name="nhdMatKhau"
                        required
                    />
                    @error('nhdMatKhau')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
    
                <div class="forgot-password">
                    <a href="/forgot-password">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>