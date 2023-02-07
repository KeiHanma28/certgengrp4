<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>CertiFier</title>
<link rel="icon" href="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png" type="image/icon type">
</head>
<body>
    <a href="/index"  type="button" class="btn btn-light m-0 p-0">Go Back</a>

    <div class="container">
        
        <div class="cert mt-5 mx-auto d-block p-4" style="width: 80%; height:85vh;">

            <div class="row">

                <div class="col">
                    <div class="headerText mx-auto d-block" style="width: 100%; height:14vh;">
                        <h1 class="mt-5">Certificate of Participation</h1>
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="headerText bg-black mx-auto d-block" style="width: 80%; height:14vh; border-radius: 50%; background-image:url({{ asset($logo[0]->logo_img) }})">
                        <img width="150px" src="{{ asset($logo[0]->logo_img) }}" alt="">
                    </div>
                </div>

            </div>    
            <h2 class="text-center mt-4">Presented To:</h2>

            <div class="text-center mt-5 p-0">
               <h1 class="p-0 m-0">{{ $certs[0]->firstname . " " . $certs[0]->lastname  }}</h1>
            </div>

            <div class="mx-auto d-block" style="width: 80%; border-bottom: 5px solid black;">
                    
            </div>

            <div class="mx-auto d-block mt-3 text-center" style="width: 90%; height:22vh;">
                For his/her achievements in participating in the <b>{{ $certs[0]->seminar_name  }}.</b><br>
                Given on the <b>@php $created_at = new DateTime($certs[0]->date_generated); echo date_format($created_at, 'l jS F Y'); @endphp.</b>
            </div>


            <div class="row mt-5">
                <div class="col-2">
                    <div class="mx-auto d-block" style="width: 100%; height:15vh;">
                        <img src="{{ $certs[0]->validation_code }}">
                    </div>
                </div>

                <div class="col">
                    <div class=" mx-auto d-block" style="width: 90%; height:15vh; text-align: right;">

                    </div>
                </div>

                
                <div class="col">
                    <div class=" mx-auto d-block" style="width: 90%; height:15vh; text-align: right;">
                        
                        <div class="mx-auto d-block" style="width: 80%; border-bottom: 2px solid black;">
                            <div class="text-center">
                                <img width="150px" src="{{ asset($signature[0]->signature_img) }}" alt="">
                                </div>
                        </div>


                        <div class="text-center">
                           {{ $signature[0]->signature_name }}
                        </div>

                        <div class="text-center" style="font-size: 10px;">
                            {{ $signature[0]->signature_position }}
                         </div>
                   
                    </div>
                </div>

                
            </div>

        </div>
    </div>
</body>
</html>