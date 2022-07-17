<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>RenderByte | Login</title>

<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="{!! url('public/images/OriginalLogoNW.png') !!}">
    <!-- Bootstrap core CSS -->
    <link href="{!! url('public/assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('public/assets/css/signin.css') !!}" rel="stylesheet">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{!! url('public/assets/css/custom.css') !!}" rel="stylesheet">
</head>
<body class="text-center p-0">
    
    <main class="form-signin p-0">

        @yield('content')
        
    </main>
    

</body>
</html>
