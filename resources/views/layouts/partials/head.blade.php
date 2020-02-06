<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">

<title>{{ (isset($pageTitle) ) ? $pageTitle : 'DTS International' }}</title>

<!-- Bootstrap Core CSS -->
<link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Menu CSS -->
<link href="/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!-- toast CSS -->
<link href="/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
<!-- morris CSS -->
<link href="/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
<!-- chartist CSS -->
<link href="/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
<link href="/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
<!-- Calendar CSS -->
<link href="/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
<!-- animation CSS -->
<link href="/css/animate.css" rel="stylesheet">
<!-- Chosen CSS -->
<link href="/plugins/chosen/chosen.min.css" rel="stylesheet" />
<!-- Custom CSS -->
<link href="/css/style.css" rel="stylesheet">
<link href="/css/custom.css" rel="stylesheet">
<!-- color CSS -->
<link href="/css/colors/megna-dark.css" id="theme" rel="stylesheet">

<link href="/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

@stack('css')