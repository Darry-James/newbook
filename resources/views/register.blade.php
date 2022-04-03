
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebook-Register</title>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/front/css/style.css')}}">

</head>

<body>
    <div class="container-fluid px-0">
        <div class="flex-main-wrap">
            <div class="art-section">


            </div>
            <div class="form-section" style="overflow-y: scroll;">
                <div class="login-form-wrap">

                    <div class="d-flex justify-content-between mb-4">
                        <h1 class="title">
                            Register
                        </h1>
                        <a class="opposite-link" href="{{ route('login') }}">Login</a>
                    </div>

                    <button class="btn btn-block btn-google">
                        <i class="flaticon-google-glass-logo icons"></i>
                        Sign in with Google
                    </button>
                    <form action="{{ route('registerPost') }}" method="post">@csrf
                        <div class="form-group">
                            <label for="my-input">Full name</label>
                            <input id="my-input" class="form-control input-signin" type="text" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('name') }}</p> @endif
                        </div>

                        <div class="form-group">
                            <label for="my-input">Email address</label>
                            <input id="my-input" class="form-control input-signin" type="text" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('email') }}</p> @endif
                        </div>

                        <div class="form-group">
                            <label for="my-input">Phone number</label>
                            <input id="my-input" class="form-control input-signin" type="text" name="phone_number" value="{{ old('phone_number') }}" placeholder="">
                            @if ($errors->has('phone_number')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('phone_number') }}</p> @endif
                        </div>

                        <div class="form-group">
                            <label for="my-input">Password</label>
                            <input id="my-input" class="form-control input-signin" type="text" name="password" value="{{ old('password') }}" placeholder="">
                            @if ($errors->has('password')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('password') }}</p> @endif
                        </div>

                        <div class="form-group">
                            <label for="my-input">Confirm Password</label>
                            <input id="my-input" class="form-control input-signin" type="text" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="">
                            @if ($errors->has('password_confirmation')) <p class="help-block" style="color:red; position: relative; top:0px;">{{ $errors->first('password_confirmation') }}</p> @endif
                        </div>
                       

                        <button type="submit" class="btn btn-login">
                            Log in
                        </button>
                    </form>

                </div>

            </div>
        </div>


    </div>





    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{asset('/front/js/main.js')}}"></script>

    <script src="{{asset('/front/js/editor-config.js')}}"></script>
</body>

</html>