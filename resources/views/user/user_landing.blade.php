<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CertiFier</title>
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

      <body>

    <!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
      
      <a href="/"><h4 class="text-white"><img src="assets\img\logo (2).png" width="50px"></a>  Certi-Fier</h4>
        <!-- Uncomment below if you prefer to use an image logo -->
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Validate Certificate</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Features</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="/login">Log-in</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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

<div class="rounded shadow p-3">
<div class="row  d-flex align-items-stretch">

<div class="col-lg-6 faq-item">
  <h4>How to Validate your Certificate</h4>
  <p>
  These are the steps on how to validate your certificate in any seminar or participations.
  <ul>
    <li>Step<i class="bi bi-1-square-fill"></i> : Get an image of the QR Code of your certificate.</li>
    <li>Step<i class="bi bi-2-square-fill"></i> : Convert it into text using <a href="/qr" target="_BLANK">QR Code Scanner</a>.</li>
    <li>Step<i class="bi bi-3-square-fill"></i> : Select your QR code image.</li>
    <li>Step<i class="bi bi-4-square-fill"></i> : Click "Copy the Text" or copy the text converted.</li>
    <li>Step<i class="bi bi-5-square-fill"></i> : And paste it below here at "INPUT CODE".</li>
  </ul>
  </p>
</div>

<div class="col-lg-6 faq-item">
 <img src="images\TutorialQR.gif" width="100%"alt="">
</div>

    <span style="font-size: 10px" class="text-danger">@error('code_input'){{ $message }} @enderror</span>
  <form action="/certvalidate" method="post" enctype="multipart/form-data">
    @csrf
   
    <span style="font-size: 12px; background-color: #0C6FFD;" class="mb-1 badge">INPUT CODE:</span>
    <input type="text" name="code_input" class="form-control" placeholder="Enter converted QR image text here">


</div>
<button type="submit" class="btn btn-primary mt-3" style="background-color: #0C6FFD;" >Validate</button>
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
        <span class="badge text-light" style="background-color: #0C6FFD;">Paticipant Profile</span>
        <h5 class="m-0">{{ Session::get('ids')[0]->firstname . " " . Session::get('ids')[0]->lastname }}</h5>

        <span class="badge text-light mt-3" style="background-color: #0C6FFD;">Programme</span>
        <h5 class="m-0">{{ Session::get('ids')[0]->seminar_name }}</h5>
        <p>@php $created_at = new DateTime(Session::get('ids')[0]->date_generated); echo date_format($created_at, 'l jS F Y'); @endphp</p>
        <hr>
        
        <p class="card-text">You can redownload your certificate by clicking the following button</p>
        <a href="/download/{{ Session::get('ids')[0]->generated_id }}" style="background-color: #0C6FFD;" class="btn btn-sm text-light">Download</a>
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
            <h3>CertiFier</h3>
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
      Designed by <a href="https://github.com/KeiHanma" target="_blank">Charlie Nagal</a>
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
    
    
</body>

<div class="se-pre-con"></div>

</html>

<script>
  
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
    background-color: #0C6FFD;
    
  }

  .zoom:hover {
  background-color: #003cd4;
  transform: scale(1.01);
  transition: all 0.4s ease;/* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
  }


</style>


