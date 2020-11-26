<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Login</title>
    <link rel="stylesheet" href="/frontend/css/reset.css" />
    <link rel="stylesheet" href="/frontend/css/backend_login.css" />
  </head>
  <body>
    <div class="signup">
      <h1 class="signup-heading">Asbab Furniture</h1>
      <form method="POST" action="{{ route('login.store') }}" class="signup-form" autocomplete="off">
      @csrf
        <label for="fullname" class="signup-label" {{ __('E-Mail Address') }}>Tên Đăng Nhập</label>
        <input name="email" type="email" class="signup-input" placeholder="Email" @error('email') is-invalid @enderror" >
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
        <label class="signup-label" {{ __('Password') }}>Mật Khẩu</label>
        <input name="password" type="password" @error('password') is-invalid @enderror"  class="signup-input" placeholder="Mật khẩu">
         @error('error')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        <button class="signup-submit">{{ __('Đăng Nhập') }}</button>
      </form>
    </div>
  </body>
</html>
