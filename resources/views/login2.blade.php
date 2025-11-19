<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">   
    <link rel="stylesheet" href="{{ asset('css/vg.css') }}">
</head>

<body>

    <div class="card m-auto mt-5 d-flex" style="width: 20rem; padding: 10px;;">
        <div class="card-body">
          <form action="{{ route('auth') }}" method="post">
          @csrf
            <h5 class="card-title text-center">Login Form</h5>
            <div class="input-group mb-3">
                <span class="input-group-text bg-transparent text-white" id="basic-addon1"><i
                        class="fa-solid fa-user"></i></span>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username"
                        required aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text bg-transparent text-white" id="basic-addon1"><i
                                class="fa-solid fa-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                            required aria-label="Password" aria-describedby="basic-addon1">
            </div>
            <button type="submit" class="btn btn-outline-light" style="width: 100%;">Log In</button>
            <div class="text-white text-center mt-3">Or</div>
            <div class="d-flex justify-content-between mt-3">
                  <button class="btn btn-outline-light social-btn"><i class="fa-brands fa-google"></i> Google</button>
                  <button class="btn btn-outline-light social-btn"><i class="fa-brands fa-facebook"></i> Facebok</button>
            </div>
          </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous">
    </script>
</body>

</html>
