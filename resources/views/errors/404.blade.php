<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>404 Error Page</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="{{asset('asset/css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{asset('asset/css/style.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="{{asset('asset/css/custom/custom.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{asset('asset/css/layouts/page-center.css') }}" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="{{asset('asset/js/plugins/prism/prism.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{asset('asset/js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="error-page">

    <div class="row">
      <div class="col s12">
        <div class="browser-window">
          <div class="top-bar">
            <div class="circles">
              <div id="close-circle" class="circle"></div>
              <div id="minimize-circle" class="circle"></div>
              <div id="maximize-circle" class="circle"></div>
            </div>
          </div>
          <div class="content">
            <div class="row">
              <div id="site-layout-example-top" class="col s12">
                <p class="flat-text-logo center white-text caption-uppercase" onclick="goBack()">Selamat Anda menemukan halaman tidak terdaftar kami:D</p>
              </div>
              <div id="site-layout-example-right" class="col s12 m12 l12">
                <div class="row center">
                  <h1 class="text-long-shadow col s12">404</h1>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="{{asset('asset/js/plugins/jquery-1.11.2.min.js') }}"></script>
  <!--materialize js-->
  <script type="text/javascript" src="{{asset('asset/js/materialize.min.js') }}"></script>
  <!--prism-->
  <script type="text/javascript" src="{{asset('asset/js/plugins/prism/prism.js') }}"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="{{asset('asset/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{asset('asset/js/plugins.min.js') }}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{asset('asset/js/custom-script.js') }}"></script>
  
  <script type="text/javascript">
    function goBack() {
      window.history.back();
    }
  </script>
</body>

</html>