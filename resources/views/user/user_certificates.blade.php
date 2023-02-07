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
	}

  .button {
  position: relative;
  padding: 8px 16px;
  background: #009579;
  border: none;
  outline: none;
  border-radius: 2px;
  cursor: pointer;
}

.button:active {
  background: #007a63;
}

.button__text {
  font: bold 20px "Quicksand", san-serif;
  color: #ffffff;
  transition: all 0.2s;
}

.button--loading .button__text {
  visibility: hidden;
  opacity: 0;
}

.button--loading::after {
  content: "";
  position: absolute;
  width: 16px;
  height: 16px;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  border: 4px solid transparent;
  border-top-color: #ffffff;
  border-radius: 50%;
  animation: button-loading-spinner 1s ease infinite;
}

@keyframes button-loading-spinner {
  from {
    transform: rotate(0turn);
  }

  to {
    transform: rotate(1turn);
  }
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
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
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
      <div class="alert alert-success">
      {{ Session::get('success') }}
      </div>
      @endif

      @if(Session::get('fail'))
          <div class="alert alert-secondary">
          {{ Session::get('fail') }}
          </div>
      @endif


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
                        <span class="badge bg-danger">Not Sent</span>
                        @endif
                      </td>
                      <td>
                      @if($gen->status == 1)
                      {{ $gen->date_sended }}
                      @else
                      <span class="badge bg-danger">Not Sent</span>
                      @endif
                    </td>

                      <td><a href="/viewCertificate/{{ $gen->generated_id }}" class="button btn btn-primary" onclick="this.classList.toggle('button--loading')"><i class="bi bi-eye-fill"></i></a> 
                        <a href="/deleteuser/{{ $gen->generated_id }}" class="button btn btn-danger"  ><i class="bi bi-trash3-fill" onclick="this.classList.toggle('button--loading')"></i></a> 
                       <a href="/emailsent/{{ $gen->generated_id }}"  class="button btn btn-success"  ><i class="bi bi-send-fill" onclick="this.classList.toggle('button--loading')"></i></a> 
                      </td>  
                  </tr>

                  @endforeach
           


<script type="text/javascript">
 const btn = document.querySelector(".button");

btn.classList.add("button--loading");
btn.classList.remove("button--loading");
</script>   
      </tbody>
  </table>
 
  </div>
</div>


    
</body>
</html>

