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

      <script src="https://d3js.org/d3.v4.min.js"></script>
  <script src=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
  <link
    rel="stylesheet"
    href=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css"
  />
 
  
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js">
  </script>
  
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

      <!-- (A2) MENU ITEMS -->

      <a href="landing" class="current">
        <i class="ico">&#9881;</i>
        <i class="txt">Dashboard</i>
      </a>
      <a href="users">
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

    <div class="col-xs-8 text-center">
      <h2>Welcome to Dashboard</h2>
    </div>
    
   
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
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">id</th>
        <th scope="col">Page Title</th>
        <th scope="col">Page Intro</th>
        <th scope="col">Page Location</th>
        <th scope="col">Page Email</th>
        <th scope="col">Page Contact</th>
        <th scope="col">Page Year</th>
        <th scope="col">Action</th>
        </tr>
        
    </thead>

    <tbody>
        <tr>
            <td>{{$landing->id}}</td>
            <td>{{$landing->title}}</td>
            <td>{{$landing->intro}}</td>
            <td>{{$landing->location}}                 
                </td>
            <td>{{$landing->email}}</td>
            <td>{{$landing->contact}}</td>
            <td>{{$landing->year}}</td>
            <td>
               
                <a href="/editpage/{{$landing->id}}" class="btn btn-secondary">Edit</a>
            </td>
        </tr>
       

    </tbody>
</table>
<div class="container">
  <div class="row">
    <div class="col">
    <div id="donut-chart"></div>
    </div>
    <div class="col">
    <div id="donut-charts"></div>
    </div>
    <div class="col">
    <div id="donut-chartss"></div>
    </div>
  </div>
  </div>
    </main>
    <main id="pgcerts">
    <script>
      var chart = bb.generate({
        data: {
          columns: [
            ["Valid Users", {{$validusers->count()}} ],
            ["Not Valid Users",   {{$notvalidusers->count()}} ] ,
          ],
          type: "donut",
          onclick: function (d, i) {
            console.log("onclick", d, i);
          },
          onover: function (d, i) {
            console.log("onover", d, i);
          },
          onout: function (d, i) {
            console.log("onout", d, i);
          },
        },
        donut: {
          title: "Users",
        },
        bindto: "#donut-chart",
      });
    </script>
    <script>
      var chart = bb.generate({
        data: {
          columns: [
            ["Sended", {{$sended->count()}} ],
            ["Not Yet Sent",   {{$notsended->count()}} ] ,
          ],
          type: "donut",
          onclick: function (d, i) {
            console.log("onclick", d, i);
          },
          onover: function (d, i) {
            console.log("onover", d, i);
          },
          onout: function (d, i) {
            console.log("onout", d, i);
          },
        },
        donut: {
          title: "Certificates Sent",
        },
        bindto: "#donut-chartss",
      });
    </script>
    <script>
      var chart = bb.generate({
        data: {
          columns: [
            ["Base Designs", {{$base->count()}}],
            ["Logos", {{$logo->count()}}],
            ["Programmes/Seminars", {{$seminars->count()}}],
          ],
          type: "donut",
          onclick: function (d, i) {
            console.log("onclick", d, i);
          },
          onover: function (d, i) {
            console.log("onover", d, i);
          },
          onout: function (d, i) {
            console.log("onout", d, i);
          },
        },
        donut: {
          title: "Certificate Parts",
        },
        bindto: "#donut-charts",
      });
    </script>
  </body>
</html>