<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Trihp</title>
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body>
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible" style="background: #00c292; color:white;margin-top: 7px; position: absolute; right: 25px;top: 10px; z-index: 1;padding: 10px 25px; color: #fff; font-size: 15px; font-weight: 400;"> 
      <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: #fff; font-size: 18px;margin-right: 5px; line-height: normal;">&times;</a>
      <strong style="margin-bottom: 0rem; color: #fff;">{{ $message }}</strong>
    </div>
    @endif
    @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-dismissible" role="alert"  style="background: red; color:white;margin-top: 7px; position: absolute; right: 25px;top: 10px; z-index: 1;padding: 10px 25px; color: #fff; font-size: 15px; font-weight: 400;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="alert-message">
        <p class="mb-0"><strong>Error! </strong>{{ $message }}</p>
        </div>
      </div>
    @endif
    <section id="login-page" class="login-page">
        <div class="left-hero-image"></div>
        <div class="login-form">
            <img src="{{asset('admin/assets/images/login-logo.png')}}" alt="" class="login-logo img-fluid mx-auto mb-5" />
            <form method="post" action="{{route('admin.postLogin')}}" class="login">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" name="email" value="{{old('email')}}" placeholder="Email" class="form-control w-100 text-center"/>
                    @if ($errors->has('email'))
                    <span class="d-block error small text-center">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group mb-4">
                    <input type="password" name="password" value="" placeholder="Password" class="form-control w-100 text-center"/>
                    @if($errors->has('password'))
                    <span class="d-block error small text-center">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary w-100 border-rounded">Continue</button>
                </div>
            </form>
        </div>
    </section>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom.js')}}"></script>
</body>
</html>