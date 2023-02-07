<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CertiFier</title>
<link rel="icon" href="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png" type="image/icon type">

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
      <style>
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

          
<script type="text/javascript">
    function spinner() {
        document.getElementsByClassName("loader")[0].style.display = "block";
    }
</script>   
</head>



      
      <body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
      
      <a href="/pro"><h4 class="text-white"><img src="assets\img\logo (2).png" width="50px"></a> Certi-Fier</h4>
        <!-- Uncomment below if you prefer to use an image logo -->
        
      </div>

      <nav id="navbar" class="navbar ">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about"> Certificate</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Features</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
      
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="#about"><span class="badge text-bg-success text-light">Logged as Coordinator</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link active" aria-current="page" href="/pro">Home</a></li>
              <li><a class="nav-link" href="/pro/editing">Edit Designs</a></li>
              <li><a class="nav-link" href="/pro/seminars">Edit Seminars</a></li>
              <li><a class="nav-link" href="/generatedcertificates">Generated Certificates</a></li>
              <li><a href="/logout" class="bg-danger color-white">Logout</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>{{$landing[0]->title}}</h1>
      <h2>{{$landing[0]->intro}}</h2>
      <a href="#about" class="btn-get-started scrollto">Start Now</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    <div class="container px-4 mt-4">
    <div class="container-fluid">
              <a class="navbar-brand" href="/pro">
                <img style="margin-top: 2px;" src="assets\img\logo (2).png" alt="" width="64" height="65" class="d-inline-block align-text-middle">
                <h1>Welcome to Certi-Fier! </a></h1>
<div class="rounded shadow p-3">

  <form action="/certvalidate" method="post" enctype="multipart/form-data">
    @csrf

    <span style="font-size: 10px" class="text-danger">@error('code_input'){{ $message }} @enderror</span>
    <span style="font-size: 12px; background-color: #649AAC;" class="mb-1 badge">INPUT CODE:</span>
    <input type="text" name="code_input" class="form-control" placeholder="$2y$10$bLAI ....">


</div>
<button type="submit" class="btn btn-primary mt-3" style="background-color: #649AAC;"  data-toggle="tooltip" data-placement="right" title="Validate through QR Code" onclick="spinner()">Validate</button>

<div class="loader">
  <div class="loading">
  </div>
</div>

</form>


<div class="mt-3">
@if(Session::get('success'))
<div class="alert alert-success">
{{ Session::get('success') }}   
</div>

@if(Session::get('ids'))
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <span class="badge text-light" style="background-color: #649AAC;">Paticipant Profile</span>
        <h5 class="m-0">{{ Session::get('ids')[0]->firstname . " " . Session::get('ids')[0]->lastname }}</h5>

        <span class="badge text-light mt-3" style="background-color: #649AAC;">Programme</span>
        <h5 class="m-0">{{ Session::get('ids')[0]->seminar_name }}</h5>
        <p>@php $created_at = new DateTime(Session::get('ids')[0]->date_generated); echo date_format($created_at, 'l jS F Y'); @endphp</p>
        <hr>
        
        <p class="card-text">You can redownload your certificate by clicking the following button</p>
        <a href="/download/{{ Session::get('ids')[0]->generated_id }}" style="background-color: #649AAC;" class="btn btn-sm text-light">Download</a>
      </div>
    </div>
  </div>
</div>
@endif

@endif

@if(Session::get('fail'))
    <div class="alert alert-secondary">
    {{ Session::get('fail') }}
    </div>
@endif
</div>


</div>


</div>

<div class="container">

    

    </div>

    <div class="container px-4">
        <div class="row mt-3">
            <div class="col-6">
    
            </div>
           
          
          </div>
    </div>


    <div class="container px-4 mt-4">

  

      @if(Session::get('fail'))
          <div class="alert alert-secondary">
          {{ Session::get('fail') }}
          </div>
      @endif



      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Seminar/Programme</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

              <form action="/insertseminar" method="post">
                @csrf

              <span style="font-size: 10px" class="text-danger">
                @error('seminar'){{ $message }}
                
                <script>
                  $(function() {
                      $('#exampleModal').modal('show');
                  });
                </script>
                
                @enderror
              </span>

              <div class="mb-1" style="font-size: 15px;">Seminar Name:</div>
              <input placeholder="Seminar Name" name="seminar" type="text" class="form-control col-6" maxlength="20">
              <i class="bi bi-info-square-fill"> Enter the Name (upto 20 Characters only)</i> 
              <span style="font-size: 10px" class="text-danger">
                @error('seminardesc'){{ $message }}
                
                <script>
                  $(function() {
                      $('#exampleModal').modal('show');
                  });
                </script>
                
                @enderror
              </span>

              <div class="mt-3 mb-1" style="font-size: 15px;">Seminar Description:</div>
              <textarea placeholder="Seminar Description" name="seminardesc" type="text" class="form-control col-6" minlength="20" maxlength="50"></textarea>
              <i class="bi bi-info-square-fill"> Enter the Desciption (upto 50 Characters only)</i> 
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary"  data-toggle="tooltip" data-placement="right" title="Click to Add Seminar/Programme" onclick="spinner()">Add</button>
              
<div class="loader">
  <div class="loading">
  </div>
</div>

            </div>

          </form>

          </div>
        </div>
      </div>

      <div class="modal fade" id="newModules" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New Designs</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

              <form action="/insertModules" method="post" enctype="multipart/form-data">
                @csrf

                <span style="font-size: 10px" class="text-danger">
                  @error('type'){{ $message }}
                  
                  <script>
                    $(function() {
                        $('#newModules').modal('show');
                    });
                  </script>
                  
                  @enderror
                </span>
  
                <div class="mb-1" style="font-size: 15px;">Type:</div>
                <select name="type" id="type" class="form-control">
                  <option value="1">Logo</option>
                  <option value="2">Signature</option>
                  <option value="3">Certificate Image</option>
                </select>
                <i class="bi bi-info-square-fill"> Select Type (Logo, Signature, Certificate Image)</i> 

                <div id="baseimage_layout">
                  <div class="mt-3 mb-1" style="font-size: 15px;">Example Size and Layout: (2000 x 1400)</div>
                  <img class="rounded shadow" width="100%" src="{{ asset('images/Layout.png') }}" alt="">
                </div>

                <div id="signature_layout">
                  <div class="mt-3 mb-1" style="font-size: 15px;">Signature Size: <b>(1280 x 500) PNG</b></div>
                </div>

                <div class="mt-3 mb-1" style="font-size: 15px;">Name: <i class="bi bi-info-square-fill"> Enter the Name (Max 20 characters)</i> </div>
                <input name="name" type="text" class="form-control col-6" maxlength="20">
               
                <div class="mt-3 mb-1" id="pos" style="font-size: 15px;">Position: <i class="bi bi-info-square-fill"> Enter the Position of Signature Applicant</i> </div>
                
                <input name="position" id="posinput" type="text" class="form-control col-6" >
               

           
              <span style="font-size: 10px" class="text-danger">
                @error('file'){{ $message }}
                
                <script>
                  $(function() {
                      $('#newModules').modal('show');
                  });
                </script>
                
                @enderror
              </span>

              <div class="mt-3 mb-1" style="font-size: 15px;">Upload Photo:</div>
              <input name="file" type="file" class="form-control col-6">

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Click to Add Design" onclick="spinner()">Add</button>
              
<div class="loader">
  <div class="loading">
  </div>
</div>

            </div>

          </form>

          </div>
        </div>
      </div>


      <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Generate Certificates</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body">

                
              <form action="insertGeneratedCerts" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                <div class="col-6">
                  <div class="mb-1" style="font-size: 15px;">Method:</div>
                  <select name="method" id="method" class="form-control mb-3">
                    <option value="0">Manualy</option>
                    <option value="1">Import CSV</option>
                  </select>
                  <i class="bi bi-info-square-fill"> Choose method(Manually input, Upload CSV)</i>
                </div>

                <div class="col-6">
                  <div class="mb-1" style="font-size: 15px;">Seminar/Programme:</div>
    
                    <span style="font-size: 10px" class="text-danger">
                      @error('seminar'){{ $message }} 
    
                        <script>
                          $(function() {
                              $('#exampleModal3').modal('show');
                          });
                        </script>
    
                      @enderror
                    </span>
    
                  <select name="seminar" id="seminar" class="form-control mb-3">
    
                    @foreach ($seminars as $sem)
                    <option value="{{ $sem->seminar_id }}">{{ $sem->seminar_name }}</option>
                    @endforeach
    
                  </select>
                  <i class="bi bi-info-square-fill"> Choose Seminar/Programme</i>
                </div>
              </div>
          
              <hr>


              <div class="row mb-1">
                <div class="col-6">
                  <span style="font-size: 10px" class="text-danger">
                    @error('firstname'){{ $message }}
                    
                    <script>
                      $(function() {
                          $('#exampleModal3').modal('show');
                      });
                    </script>
                    
                    @enderror
                  </span>
    
                  <div class="mb-1" id="firstname_label" style="font-size: 15px;">First Name:</div>
                  <input placeholder="Firstname" name="firstname" id="firstname" type="text" class="form-control col-6">
                  </div>
    
                  <div class="col-6">
                    <span style="font-size: 10px" class="text-danger">
                      @error('lastname'){{ $message }} 
      
                      <script>
                        $(function() {
                            $('#exampleModal3').modal('show');
                        });
                      </script>
      
                      @enderror
                    </span>
      
                    <div class="mb-1" id="lastname_label" style="font-size: 15px;">Last Name:</div>
                    <input placeholder="Lastname" name="lastname" id="lastname" type="text" class="form-control col-6">
                  </div>
                  <span style="font-size: 10px" class="text-danger">
                    @error('cert_detail'){{ $message }}
                    
                    <script>
                      $(function() {
                          $('#exampleModal3').modal('show');
                      });
                    </script>
                    
                    @enderror
                  </span>
    
                  <div class="mb-1" id="cert_detail_label" style="font-size: 15px;">Enter Detail here:</div>  <i class="bi bi-info-square-fill"> Ex. "For attendance and participation on the"</i> 
                  <input placeholder="Certificate Detail" name="cert_detail" id="cert_detail" type="text" class="form-control col-6">
                  </div>
                  
              <span style="font-size: 10px" class="text-danger">
                @error('email'){{ $message }} 

                <script>
                  $(function() {
                      $('#exampleModal3').modal('show');
                  });
                </script>

                @enderror
              </span>

              <div class="mb-1" id="email_label" style="font-size: 15px;">Email:</div>
              <input name="email" id="email" type="email" placeholder="example@gmail.com" class="form-control col-12">


              
              <div class="mb-2" id="file_excel_guide" style="font-size: 15px;">
                <div class="mb-1" style="font-size: 15px;">CSV format:</div>
                <img class="rounded shadow border" width="100%" src="{{asset('images/sample_csv.png')}}" alt="sample_csv">
                <i class="bi bi-info-square-fill"> Take note of the CSV format</i>
              </div>

              <div class="mb-1" id="file_excel_label" style="font-size: 15px;">Import File:</div>
              <input name="file_excel" id="file_excel" type="file" class="form-control col-12">
    
            </div>



            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary"  data-toggle="tooltip" data-placement="right" title="Click to Add Participant" onclick="spinner()" >Submit</button>
              
<div class="loader">
  <div class="loading">
  </div>
</div>

            </div>
           
          </form>

          </div>
        </div>
      </div>



      <div class="row rounded shadow">

        <div class="col-4 p-2">
          <div class="card bg-success text-center shadow zoom text-light p-3 ">
            <div class="card-body">
              <h5 class="card-title">Add Seminars/Programs</h5>
              <a data-bs-toggle="modal" data-bs-target="#exampleModal"  class="stretched-link"></a>
            </div>
          </div>
        </div>

        <div class="col-4 p-2">
          <div class="card bg-success text-center shadow zoom text-light p-3">
            <div class="card-body">
       
              <h5 class="card-title">Add Designs for Certificates</h5>
              <a data-bs-toggle="modal" style="background-color: white" data-bs-target="#newModules"  class="stretched-link"></a>
            </div>
          </div>
        </div>

        
        <div class="col-4 p-2">
          <div class="card text-center shadow zoom text-light p-3">
            <div class="card-body">
              <h5 class="card-title">Generate Certificates</h5>
              <a data-bs-toggle="modal" data-bs-target="#exampleModal3" href="/generatedcertificates" class="stretched-link"></a>
            </div>
          </div>
        </div>

        <div class="col-4 p-2">
          <div class="card bg-success text-center shadow zoom text-light p-3">
            <div class="card-body">
              <h5 class="card-title">Manage Programs/Seminars</h5>
              <a href="/pro/seminars" class="stretched-link"></a>
            </div>
          </div>
        </div>

        <div class="col-4 p-2">
          <div class="card bg-secondary text-center shadow zoom text-light p-3">
            <div class="card-body">
              <h5 class="card-title">Manage Designed Certificates</h5>
              <a href="/pro/editing" class="stretched-link"></a>
            </div>
          </div>
        </div>

        <div class="col-4 p-2">
          <div class="card text-center shadow text-light zoom p-3">
            <div class="card-body">
              <h5 class="card-title">Manage Generated Certificates</h5>
              <a href="/generatedcertificates" class="stretched-link"></a>
            </div>
          </div>
        </div>
        <div class="col-4 p-2">
          <div class="card bg-danger text-center shadow text-light zoom p-3">
            <div class="card-body">
              <h5 class="card-title">Image Editor </h5>
              <a href="http://image-editor.42web.io/" class="stretched-link" target="_blank"></a>
            </div>
          </div>
        </div>

      </div>


  </div>



    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Our platform for creating certificates and digital credentials can be used for everything</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="ri-settings-4-fill"></i></div>
            <h4 class="title"><a href="">Create</a></h4>
            <p class="description">Use our powerful builder to create beautiful certificates: either from scratch or existing templates.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="ri-folder-open-fill"></i></div>
            <h4 class="title"><a href="">Issue</a></h4>
            <p class="description">Generate certificates in bulk with one click by uploading a spreadsheet with recipients’ data or by integrating Certifier via API.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="ri-delete-bin-3-fill"></i></div>
            <h4 class="title"><a href="">Manage</a></h4>
            <p class="description">Enjoy the ability to securely store and manage issued certificates.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="ri-qr-code-fill"></i></div>
            <h4 class="title"><a href="">Verify</a></h4>
            <p class="description">Replace useless PDFs with trustworthy and verifiable documents.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="ri-share-line"></i></div>
            <h4 class="title"><a href="">Share</a></h4>
            <p class="description">The certificates you issue become a powerful marketing tool since they are easily shareable on LinkedIn or other social media platforms.</p>
          </div>
         

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="portfolio" class="portfolio">
    <div class="container">

<div class="section-title">
  <h2>The Most Powerful Features To Manage Certificates</h2>
</div>

<div class="row  d-flex align-items-stretch">

  <div class="col-lg-6 faq-item">
    <h4>Design Certificates</h4>
    <p>
    Make awesome certificate designs within minutes with our powerful certificate builder and make certificate templates using image editor.
    <ul>
      <li>300+ certificate templates</li>
      <li>Customizable text, fonts, and objects</li>
      <li>Add personalized branding, colors, and style</li>
      <li>Easily alterable certificate size</li>
      <li>Dynamic and customizable attributes</li>
    </ul>
    </p>
  </div>

  <div class="col-lg-6 faq-item">
   <img src="assets\img\image_editor.jpg" width="70%"alt="">
  </div>

  <div class="col-lg-6 faq-item">
  <img src="assets\img\manage.jpg" width="70%"alt="">
  </div>

  <div class="col-lg-6 faq-item">
    <i class="bx bx-help-circle"></i>
    <h4>Manage Recipients</h4>
    <p>
    CertiFier is a comprehensive credential management system where you can manage the certificate distribution process from start to finish. It allows you to create groups of recipients, rapidly issue certificates, modify and resend issued documents.
    <ul>
      <li>Create recipients</li>
      <li>Upload a spreadsheet with recipients’ data</li>
      <li>Map your data to dynamic attributes</li>
      <li>Send credentials to recipients</li>
      <li>Manage all issued credentials in one place</li>
    </ul>
    </p>
  </div>


</div>

</div>
    </section><!-- End Features Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Here are the developers of the CertiFier</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Charlie Ken A. Nagal</h4>
                <span>Web Developer/Student</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jacklyn Soriano</h4>
                <span>Web Designer/Student</span>
              </div>
            </div>
          </div>

          
        </div>

      </div>
    </section><!-- End Team Section -->

  

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>The location where the students studied in PSU Urdaneta to develop the CertiFier web application</p>
        </div>
      </div>
      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15341.940546639335!2d120.5735853!3d15.9882416!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfdb173c5fca03a16!2sPangasinan%20State%20University%2C%20Urdaneta%20Campus!5e0!3m2!1sen!2sph!4v1670341751694!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="container">
        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>{{$landing[0]->location}},<br>XHQF+7CW</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>{{$landing[0]->email}}<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>{{$landing[0]->contact}}</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            
            <p>{{$landing[0]->contact}}</p>
          </div>
        </div>

  
        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright {{$landing[0]->year}} <strong><span>CertiFier</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://github.com/KeiHanma">Charlie Nagal</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    
    
<script type="text/javascript">
    function spinner() {
        document.getElementsByClassName("loader")[0].style.display = "block";
    }
</script>    

</body>

<div class="se-pre-con"></div>

</html>

<script>
  function spinner() {
        document.getElementsByClassName("loader")[0].style.display = "block";
    }
  $( document ).ready(function() {

    if($( "#method option:selected" ).val() != 1){
          $("#firstname").show();
          $("#lastname").show();
          $("#lastname_label").show();
          $("#firstname_label").show();

          $("#email").show();
          $("#email_label").show();

          $("#file_excel_label").hide();
          $("#file_excel").hide();
          $("#file_excel_guide").hide();
      }else{
        $("#firstname").hide();
          $("#lastname").hide();
          $("#lastname_label").hide();
          $("#firstname_label").hide();

          $("#email").hide();
          $("#email_label").hide();
          
          $("#file_excel_label").show();
          $("#file_excel").show();
          $("#file_excel_guide").show();
          
     }

     $( "#method" ).change(function() {

      if($( "#method option:selected" ).val() != 1){
          $("#firstname").show();
          $("#lastname").show();
          $("#lastname_label").show();
          $("#firstname_label").show();

          $("#email").show();
          $("#email_label").show();

          $("#file_excel_label").hide();
          $("#file_excel").hide();
          $("#file_excel_guide").hide();
      }else{
        $("#firstname").hide();
          $("#lastname").hide();
          $("#lastname_label").hide();
          $("#firstname_label").hide();

          $("#email").hide();
          $("#email_label").hide();
          
          $("#file_excel_label").show();
          $("#file_excel").show();
          $("#file_excel_guide").show();
     }

      });




      if($( "#type option:selected" ).val() == 2){
          $("#pos").show();
          $("#posinput").show(); 
          $("#baseimage_layout").hide();
          $("#signature_layout").show();
          
      }else if($( "#type option:selected" ).val() == 1){
          $("#pos").hide();
          $("#posinput").hide();
          $("#baseimage_layout").hide();    
          $("#signature_layout").hide();
      } else{
          $("#baseimage_layout").show();
          $("#pos").hide();
          $("#posinput").hide();
          $("#signature_layout").hide();
      }
      


      $( "#type" ).change(function() {
      console.log("asd");
      console.log($( "#type option:selected" ).text());
      console.log($( "#type option:selected" ).val());

      if($( "#type option:selected" ).val() == 2){
          $("#pos").show();
          $("#posinput").show(); 
          $("#baseimage_layout").hide();
          $("#signature_layout").show();
          
      }else if($( "#type option:selected" ).val() == 1){
          $("#pos").hide();
          $("#posinput").hide();
          $("#baseimage_layout").hide();    
          $("#signature_layout").hide();
      } else{
          $("#baseimage_layout").show();
          $("#pos").hide();
          $("#posinput").hide();
          $("#signature_layout").hide();
      }
      


      });

      
  });
</script>


<style>



  .zoom{
    background-color: #649AAC;
    
  }

  .zoom:hover {
  background-color: #003cd4;
  transform: scale(1.01);
  transition: all 0.4s ease;/* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
  }


</style>


