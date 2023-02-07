
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CertiFier</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <style>
      body{
        background-image: linear-gradient(to bottom, blue , orange);
      }
      * {
  margin: 0;
  padding: 0;
}

.loader {
  display: none;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
}

.loading {
  border: 2px solid #ccc;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  border-top-color: #1ecd97;
  border-left-color: #1ecd97;
  animation: spin 1s infinite ease-in;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}
     
      </style>
</head>
<body class="bg-dark">

    <div class="container">
    <section class="vh-100" style="background: url('assets\img\back.jpg') no-repeat fixed center;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="assets\img\logo (1).png" width="100%" height="200%"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
             


         
            <a href="/" class="text-black"><button class="btn btn-warning btn-sm"> Go back Home</button></a>
            @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{ Session::get('fail') }}
            </div>
            @endif
                <form action="check" method="post">
                @csrf
                <span style="font-size: 10px" class="text-danger">@error('username'){{ $message }} @enderror</span>
            <div class="my-2">
                <input type="text" aria-label="First name" name="username" class="form-control" placeholder="Username">
            </div>

            <span style="font-size: 10px" class="text-danger">@error('password'){{ $message }} @enderror</span>
            <div class="my-2">
                <input type="password" aria-label="First name" name="password" class="form-control" placeholder="Password">
            </div>

            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-primary btn-sm" type="submit" onclick="spinner()">Login</button>
                <div class="loader">
  <div class="loading">
  </div>
</div>
            </div>
            <a href="/signup">Sign Up</a><br>
            <a href="/forgot">Forgot Your Password?</a>
        
            <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
    
  </div>

            </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
    function spinner() {
        document.getElementsByClassName("loader")[0].style.display = "block";
    }
</script>    
        <!-- <div class="p-3 text-dark bg-light col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 position-absolute top-50 start-50 translate-middle rounded">
            <div class="fw-bold">LOGIN</div>

            @if(empty($user))
            {{'No Session'}}
            @else
            {{'Has Session'}}
            @endif


            <p style="font-size: 10px">CertiFier</p>
            <hr>

            @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{ Session::get('fail') }}
            </div>
            @endif

            <form action="check" method="post">
            @csrf
            <span style="font-size: 10px" class="text-danger">@error('username'){{ $message }} @enderror</span>
            <div class="my-2">
                <input type="text" aria-label="First name" name="username" class="form-control" placeholder="Username">
            </div>

            <span style="font-size: 10px" class="text-danger">@error('password'){{ $message }} @enderror</span>
            <div class="my-2">
                <input type="password" aria-label="First name" name="password" class="form-control" placeholder="Password">
            </div>

            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-primary btn-sm" type="submit">Login</button>
            </div>

            </form>

        </div> -->
    </div>


    
</body>
</html>