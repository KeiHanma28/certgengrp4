<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CertiFier</title>
    <link rel="icon" href="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png" type="image/icon type">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>body{
		color: #25274d;
    background-image: url("images/MicrosoftTeams-image.png");
	}
	.contact{
		padding: 4%;
		height: 400px;
	}
  
	.col-md-3{
		background: #659AAD;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}</style>
</head>


<!------ Include the above in your HEAD tag ---------->
      <!-- CSS only -->
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
      
      <script>
      $(document).ready(function () {
        $('#designs').DataTable();
      });
      </script>
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
			<a class="navbar-brand" href="/pro">
                <img style="margin-top: 2px;" src='{{asset("assets\img\logo (2).png")}}' alt="" width="100"  class="d-inline-block align-text-middle">

                <h2>
                    CertiFier
                </h2>
              </a>
        <ul class="navbar-nav mt-4">

                   
                      


        <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="/pro">Home</a>
                      </li>
    
                      <li class="nav-item">
                        <a class="nav-link " href="/pro/editing">Edit Designs</a>
                      </li>
    
                      <li class="nav-item">
                        <a class="nav-link " href="/pro/seminars">Edit Seminars</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link " href="/generatedcertificates">Generated Certificates</a>
                      </li>

                      <li class="nav-item">
                        <a href="/logout" type="button" class="p-0 m-0 btn btn-link btn-sm text-decoration-none mt-4 text-danger">Logout</a>
                      </li>
                      
</ul>

			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
<body class="p-3 mb-2 ">

    <div class="container">

       

    <div class="container px-4">
        <div class="row mt-3">
            <div class="col-6">
    
            </div>
            <div class="col-6 text-end">
                <span class="fs-6 badge text-light text-bg-success">Logged as Coordinator</span>
            </div>
          
          </div>
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


    <div class="container px-4 mt-4 bg-light">

      <div class="fs-3 mb-4">Update <b>{{ $seminars[0]->seminar_name }}</b></div>
            <hr>
      <div class="shadow rounded p-3">
        <form action="/pro/seminars/update/{{  $seminars[0]->seminar_id}}/" method="get">
          {{ csrf_field() }}  
 
            <div class="row">
            <div class="col-12">
                Seminar Name: <i class="bi bi-info-square-fill"> Update Seminar Name (Max 20)</i> 
                <input type="text" class="form-control" value="{{ $seminars[0]->seminar_name  }}" name="seminarname" id="seminarname">
            </div>
  
            <div class="col-12 mt-3">
                Seminar Description: <i class="bi bi-info-square-fill"> Update Seminar Description (Max 50)</i> 
                <textarea class="form-control" value="{{ $seminars[0]->seminar_desc }}" name="seminardesc" id="seminardesc" minlength="20" maxlength="50">{{ $seminars[0]->seminar_desc }}</textarea>
            </div>
          </div>
  
          <div>
              <button type="submit" class="btn btn-primary mt-4"  data-toggle="tooltip" data-placement="right" title="Update Seminar/Programme">Update Changes</button>
          </div>
        </form>
      </div>

     </div>


    
</body>
</html>

