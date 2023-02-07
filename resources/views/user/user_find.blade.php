<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CertiFier</title>
<link rel="icon" href="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png" type="image/icon type">
</head>



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
        $('#certificates').DataTable();
      });
      </script>
      
      <body class="p-3 mb-2 ">

    <div class="container">

        <nav class="navbar mt-5">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">
                <img style="margin-top: 2px;" src="assets\img\logo (2).png" alt="" width="64" height="65" class="d-inline-block align-text-middle">

                <span class="p-3 mb-2 ">
                    CertiFier
                </span>
              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mt-4">


                  <li class="nav-item">
                    <a class="nav-link active p-3 mb-2 " aria-current="page" href="/basic">Home</a>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link p-3 mb-2 " href="/findcertificates">Find Certificates</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>



    </div>


    <div class="container px-4">
        <div class="row mt-3">
            <div class="col-6">
    
            </div>
            <div class="col-6 text-end">
                <span class="badge text-bg-warning text-light">Welcome!</span>
            </div>
          
          </div>
    </div>


    <div class="container px-4 mt-3">
        <div class="shadow p-3 rounded">
        <table id="certificates" class="display" style="width:100%">
          <thead>
              <tr>
                  <th>Full Name</th>
                  <th>Seminar</th>
                  <th>Code</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
          
                      @foreach ($generated as $gen)
    
                      <tr>
                           <td><b>{{ $gen->firstname . " " . $gen->lastname  }}</b></td>
                           <td>{{ $gen->seminar_name }}</td>
                           <td>{{ $gen->validation_code }}</td>
                           <td><a href="/download/{{ $gen->generated_id }}" class="button-link">Download</a></td>
                      </tr>
    
                      @endforeach
                
         
          </tbody>
      </table>
      </div>
    </div>

</body>
</html>

