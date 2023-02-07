<!DOCTYPE html>
<html>
  <head>
    <title>CertGen</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" href="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png" type="image/icon type">
</head>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  </head>
  <body>
    <!-- (A) SIDEBAR -->
    <div id="pgside">
      <!-- (A1) BRANDING OR USER -->
      <!-- LINK TO DASHBOARD OR LOGOUT -->
      <div id="pguser">
        <img src="potato.png">
        <i class="txt">Administrator</i>
      </div>
      <a href="landing">
        <i class="ico">&#9881;</i>
        <i class="txt">Dashboard</i>
      </a>
      <!-- (A2) MENU ITEMS -->
      <a href="#" class="current">
        <i class="ico">&#9733;</i>
        <i class="txt">Account Mangement</i>
      </a>
      
      <a href="certs" >
        <i class="ico">&#9728;</i>
        <i class="txt">Monitor Certificates</i>
      </a>
     
      <a href="/logout">
        <i class="ico">&#9737;</i>
        <i class="txt">Log Out</i>
      </a>
    </div>

    <!-- (B) MAIN -->
    <main id="pgmain">
    <div class="container px-4 mt-3">
      @if(Session::get('success'))
      <div class="alert alert-warning">
      {{ Session::get('success') }}
      </div>
      @endif
  
      @if(Session::get('fail'))
          <div class="alert alert-secondary">
          {{ Session::get('fail') }}
          </div>
      @endif
    </div>
    <h5 class="card-title">Account Management for Coordinators</h5>
<a href="/create" class="btn btn-primary">Create User</a>
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">user_id</th>
        <th scope="col">user_firstname</th>
        <th scope="col">user_lastname</th>
        <th scope="col">user_email</th>
        <th scope="col">user_type</th>
        <th scope="col">user_username</th>
        <th scope="col">user_password</th>
        <th scope="col">action</th>
        </tr>
        
    </thead>

    <tbody>
        @foreach ($users as $users)
        <tr>
            <td>{{$users->user_id}}</td>
            <td>{{$users->user_firstname}}</td>
            <td>{{$users->user_lastname}}</td>
            <td>{{$users->user_email}}</td>
            <td>@if($users->user_type == 0)
                    Coordinator 
                @elseif($users->user_type == 3)
                    ADMIN
                @else 
                    Not specified
                @endif
                </td>
            <td>{{$users->user_username}}</td>
            <td>Hidden</td>
            <td>
                <a href="/delete/{{$users->user_id}}" class="btn btn-danger">Delete</a>
                <a href="/edit/{{$users->user_id}}" class="btn btn-secondary">Edit</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

<h5 class="card-title">Validate Coordinators</h5>
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">user_id</th>
        <th scope="col">user_firstname</th>
        <th scope="col">user_lastname</th>
        <th scope="col">user_email</th>
        <th scope="col">user_type</th>
        <th scope="col">user_username</th>
        <th scope="col">user_password</th>
        <th scope="col">action</th>
        </tr>
        
    </thead>

    <tbody>
        @foreach ($req_user as $user)
        <tr>
            <td>{{$user->user_id}}</td>
            <td>{{$user->user_firstname}}</td>
            <td>{{$user->user_lastname}}</td>
            <td>{{$user->user_email}}</td>
            <td>@if($user->user_type == 0)
                    Coordinator 
                @elseif($user->user_type == 3)
                    ADMIN
                @else 
                    Not specified
                @endif
                </td>
            <td>{{$user->user_username}}</td>
            <td>Hidden</td>
            <td>
                <a href="/deletes/{{$user->user_id}}" class="btn btn-danger">Disapprove</a>
                <a href="/approve/{{$user->user_id}}" class="btn btn-success">Approve</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

    </main>
    <main id="pgcerts">
  </body>
</html>