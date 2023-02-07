
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
     
      </style>

</head>
<body class="bg-dark">

    <div class="container">
    <section class="vh-100" style="background-color: dark-grey;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="assets\img\seminar.jpg" width="100%"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; object-fit: cover;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
           


              <p style="font-size: 40px">CertiFier</p>
            <hr>
            
            
            <h4>Enter your Token and New Password</h4>
    <form action="/tokenlink" method="post">
            @csrf
           
        <div class="my-2">
        <input value="" type="text" name="password_reset_token" placeholder="Enter token here">
        </div>
        <div class="my-2">
        <input value="" type="password" name="user_password" placeholder="Enter New Password">
        </div>


        <div class="my-2">
        <div class="d-grid gap-2 mt-3">
        <button class="btn btn-success btn-sm" type="submit">Reset Now</button>
        
        </div>
        <a href="/login" class="text-black"><button class="btn btn-warning btn-sm"> Go back to Login</button></a>
        </div>
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
        
    </div>


    
</body>
</html>