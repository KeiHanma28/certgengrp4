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
      <a href="users" >
        <i class="ico">&#9733;</i>
        <i class="txt">Account Mangement</i>
      </a>
      <a href="certs" class="current">
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
    <div class="rounded p-2">
      <h5>List of Generated Certificates</h5>
    </div>
  </div>

  <div class="container px-4 mt-3">
    <a href="/emailresent" class="btn btn-success">Resent All <i class="bi bi-send-fill"></i></a> 
  </div>
  


  <div class="container px-4 mt-3">
    <div class="shadow p-3 rounded">
    <table id="certificates" class="display" style="width:100%">
      <thead>
          <tr>
              <th>QR CODE</th>
              <th>Full Name</th>
              <th>Seminar</th>
              <th>Date Generated</th>
              <th>Status</th>
              <th>Date Sended</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
      
                  @foreach ($generated as $gen)

                  <tr>
                       <td><img width="50px" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ $gen->validation_code }}"></td>
                       <td>{{ $gen->firstname . " " . $gen->lastname  }}</td>
                       <td>{{ $gen->seminar_name }}</td>
                       <td>{{ $gen->date_generated }}</td>
                      <td>
                        @if($gen->status == 1)
                        <span class="badge bg-success">Sent</span>
                        @else

                        @endif
                      </td>
                      <td>{{ $gen->date_sended }}</td>

                      <td><a href="/viewCertificate/{{ $gen->generated_id }}" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a> 
                        <a href="/deleteuser/{{ $gen->generated_id }}" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a> 
                       <a href="/emailsent/{{ $gen->generated_id }}" class="btn btn-success"><i class="bi bi-send-fill"></i></a> 
                      </td>  
                  </tr>

                  @endforeach
            
     
      </tbody>
  </table>
 
  </div>
</div>

    </main>
  </body>
</html>