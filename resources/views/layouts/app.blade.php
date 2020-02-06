<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">
{{--<title>Login - DTS International</title>--}}
<!-- Bootstrap Core CSS -->
<link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Chosen boxes -->
<link rel="stylesheet" href="chosen.min.css">
<!-- animation CSS -->
<link href="/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="/css/colors/default.css" id="theme"  rel="stylesheet">
<!-- Chosen css -->
<link rel="stylesheet" type="text/css" href="plugins/chosen/chosen.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<section id="wrapper" class="new-login-register">
  @yield('content')
</section>

@include('layouts.partials.scripts')
</body>
</html>
