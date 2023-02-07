<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CertiFier</title>
<link rel="icon" href="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png" type="image/icon type">
</head>

<style>

        @font-face {
            font-family: 'pinyon';
            src: url({{ storage_path('fonts\PinyonScript-Regular.ttf') }}) format("truetype");
        }

        
      @font-face {
            font-family: 'poppins';
            src: url({{ storage_path('fonts\Poppins-Regular.ttf') }}) format("truetype");
        }

      @page {
      size: a4 landscape; 
      margin:0.9;padding:0.9; // you can set margin and padding 0 
    } 

    body {
      font-size: 33px;
      text-align: center;
    }

    .name{
      font-family: 'pinyon';
    }

    .seminar{
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }


    .block_container
    {
        text-align:center;
    }
    .bloc1, .bloc2
    {
        display:inline;
    }


</style>

<body style="

background-image: url('{{ asset($baseimage[0]->baseimage_img) }}');
height: 100%;
background-position: center;
background-repeat: no-repeat;
background-size: cover;

">



<img width="120px" style="position: absolute; left:65px; bottom: 60px;" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{$certs[0]->validation_code}}" alt="">

@if(isset($logo[0]->logo_img))

@if(isset($designs[0]->position))
@if($designs[0]->position == 1)
<img width="170px" style="position: absolute; bottom: 565px; left: 898px;" src="{{ asset($logo[0]->logo_img) }}" alt="">
@else
<img width="170px" style="position: absolute; bottom: 565px; left: 60px;" src="{{ asset($logo[0]->logo_img) }}" alt="">
@endif
@endif

@endif

<p class="name" style="font-size:75px; color: #0B29D9; margin-top: 360px; text-align: center; padding-bottom: 0px; margin-bottom: 0px;">{{ $certs[0]->firstname . " " . $certs[0]->lastname }}</p>

<p class="cert_detail" style="text-align: center; font-size: 16px; margin-top: 20px">{{ $certs[0]->cert_detail }}</p>

<p class="seminar" style="text-align: center; font-size: 16px;">"{{ $certs[0]->seminar_name }}" given on @php $created_at = new DateTime($certs[0]->date_generated); echo date_format($created_at, 'l jS F Y'); @endphp.</p>

@if(count($signature) == 2)

<div style="margin-top: 60px;">
  <div class="block_container" style="height: 30px">

    <div class="bloc1" style="margin-right: 100px;">
      <img width="170px" src="{{ asset($signature[0][0]->signature_img) }}" alt="">
    </div>

    <div class="bloc2">
      <img width="170px" src="{{ asset($signature[1][0]->signature_img) }}" alt="">
    </div>

  </div>


  <div class="block_container">

      <p class="seminar bloc1" style="margin-right: 75px; margin-right: 100px; font-size: 18px; text-align: center;">{{ $signature[0][0]->signature_name }}</p>
      <p class="seminar bloc2" style="margin-left: 75px; font-size: 18px; text-align: center;">{{ $signature[1][0]->signature_name }}</p>

  </div>

</div>


  <p class="seminar" style="position: absolute; left: 370px; bottom:70px; font-size: 15px; text-align: center;">{{ $signature[0][0]->signature_position }}</p>
  <p class="seminar" style="position: absolute; left: 670px; bottom:70px; font-size: 15px; text-align: center;">{{ $signature[1][0]->signature_position }}</p>







@else

<div style="margin-top: 60px;">
  <div class="block_container" style="height: 30px">
    <div class="bloc1">
      <img width="170px" src="{{ asset($signature[0][0]->signature_img) }}" alt="">
    </div>
  </div>
  
  
  <div class="block_container">
      <p class="seminar bloc1" style="font-size: 18px; text-align: center;">{{ $signature[0][0]->signature_name }}</p>
  </div>
</div>

<p class="seminar" style="position: absolute; left: 525px; bottom:70px; font-size: 15px; text-align: center;">{{ $signature[0][0]->signature_position }}</p>


@endif

<p style="left: 58px; bottom: 10px; position: absolute; font-size: 12px;">{{$certs[0]->validation_code}}</p>
  

</body>
</html>


{{-- @if($baseimage[0]->baseimage_id == 1)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CertiFier</title>
<link rel="icon" href="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png" type="image/icon type">
</head>


<style>

    @font-face {
        font-family: 'opensans';
        src: url({{ storage_path('fonts\OpenSans-Italic.ttf') }}) format("truetype");
    }

    @page {
      size: a4 landscape; 
      margin:0.9;padding:0.9; // you can set margin and padding 0 
    } 

    body {
      font-size: 33px;
      text-align: center;
    }

    .name{
      font-family: 'Tangerine';
    }

    .seminar{
      font-family: 'opensans';
    }

    

</style>

<body style="

background-image: url('{{ asset($baseimage[0]->baseimage_img) }}');
height: 100%;
background-position: center;
background-repeat: no-repeat;
background-size: cover;

">

<img width="120px" style="position: absolute; bottom: 98px; left: 98px;" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{$certs[0]->validation_code}}" alt="">


<img width="170px" style="position: absolute; bottom: 150px; left: 480px;" src="@if(count($signature) == 2){{ asset($signature[1][0]->signature_img) }}@endif" alt="">

<img width="170px" style="position: absolute; bottom: 135px; left: 800px;" src="@if(count($signature) == 2 || count($signature) == 1){{ asset($signature[0][0]->signature_img) }}@endif" alt="">


<p class="name" style="font-size:90px; margin-top: 350px; text-align: right; margin-right: 90px; margin-bottom: 0px; padding-bottom: 0px;">{{ $certs[0]->firstname . " " . $certs[0]->lastname }}</p>
<img width="170px" style="position: absolute; bottom: 536px; left: 88px;" src="{{ asset($logo[0]->logo_img) }}" alt="">

<p class="seminar" style="text-align: right; margin-right: 98px; margin-top: 40px; font-size: 18px;">"{{ $certs[0]->seminar_name }}" on @php $created_at = new DateTime($certs[0]->date_generated); echo date_format($created_at, 'l jS F Y'); @endphp.</p>


<p class="seminar" style="font-size: 18px; margin-top: 80px; ">@if(count($signature) == 2){{ $signature[1][0]->signature_name }}@endif</p>
<p class="seminar" style="position: absolute; font-size: 18px; right: 0px; margin-right: 175px; bottom: 120px;">@if(count($signature) == 2 || count($signature) == 1){{ $signature[0][0]->signature_name }}@endif</p>

<p style="font-size: 8px; text-align: right; margin-right:50px; margin-top: 80px">{{$certs[0]->validation_code}}</p>
</body>


</html>

@elseif($baseimage[0]->baseimage_id == 2)
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CertiFier</title>
<link rel="icon" href="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png" type="image/icon type">
</head>

<style>


      @font-face {
            font-family: 'poppins';
            src: url({{ storage_path('fonts\Poppins-Regular.ttf') }}) format("truetype");
        }

        
      @font-face {
            font-family: 'poppins-medium';
            src: url({{ storage_path('fonts\Poppins-Medium.ttf') }}) format("truetype");
        }


      @page {
      size: a4 landscape; 
      margin:0.9;padding:0.9; // you can set margin and padding 0 
    } 

    body {
      font-size: 33px;
      text-align: center;
    }

    .name{
      font-family: 'poppins-medium';
    }

    .seminar{
      font-family: 'poppins';
    }

</style>

<body style="

background-image: url('{{ asset($baseimage[0]->baseimage_img) }}');
height: 100%;
background-position: center;
background-repeat: no-repeat;
background-size: cover;

">


<img width="120px" style="position: absolute; bottom: 98px; left: 785px;" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{$certs[0]->validation_code}}" alt="">

<p class="name" style="margin-left: 75px; font-size:65px; color: #0B29D9; margin-top: 357px; text-align: left; margin-right: 90px; margin-bottom: 0px; padding-bottom: 0px;">{{ $certs[0]->firstname . " " . $certs[0]->lastname }}</p>
<img width="170px" style="position: absolute; bottom: 555px; left: 810px;" src="{{ asset($logo[0]->logo_img) }}" alt="">

<p class="seminar" style="margin-left: 75px; color: #083846; text-align: left; margin-top: 20px; font-size: 21px;">"{{ $certs[0]->seminar_name }}" on @php $created_at = new DateTime($certs[0]->date_generated); echo date_format($created_at, 'l jS F Y'); @endphp.</p>


<img width="170px" style="position: absolute; bottom: 150px; left: 480px;" src="@if(count($signature) == 2){{ asset($signature[1][0]->signature_img) }}@endif" alt="">

<img width="170px" style="position: absolute; bottom: 150px; left: 100px;" src="@if(count($signature) == 2 || count($signature) == 1){{ asset($signature[0][0]->signature_img) }}@endif" alt="">

<p class="seminar" style="font-size: 18px; margin-top: 48px; ">@if(count($signature) == 2){{ $signature[1][0]->signature_name }}@endif</p>
<p class="seminar" style="position: absolute; font-size: 18px; right: 0px; margin-right: 870px; bottom: 120px;">@if(count($signature) == 2 || count($signature) == 1){{ $signature[0][0]->signature_name }}@endif</p>

<p style="font-size: 8px; text-align: left; margin-left:75px; margin-top: 80px">{{$certs[0]->validation_code}}</p>
  
</body>
</html>


@elseif($baseimage[0]->baseimage_id == 3)

@endif --}}
