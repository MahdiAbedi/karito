
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Best Responsive job portal template build on Latest Bootstrap.">
    <meta name="keywords" content="job, nob board, job portal, job listing">
    <meta name="robots" content="index,follow">
    <title>Job Stock - Responsive Job Portal Bootstrap Template | ThemezHub</title>
    <link rel="stylesheet" href="site/css/bootstrap.min.css">
    <link rel="stylesheet" href="site/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="site/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="site/css/bootstrap-wysihtml5.css">
    <link rel="stylesheet" type="text/css" href="site/css/prettify.css">
    <link rel="stylesheet" href="site/css/owl.carousel.css">
    <link rel="stylesheet" href="site/css/owl.theme.css">
    <link href="site/css/font-awesome.css" rel="stylesheet">
    <link href="site/css/line-font.css" rel="stylesheet">
    <link href="site/css/animate.css" rel="stylesheet">
    <link href="site/css/bootsnav.css" rel="stylesheet">
    <link href="site/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="site/css/colors/green-style.css">
    <link href="site/css/responsiveness.css" rel="stylesheet">
    <link href="site/css/custom.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
       @include('site._layouts.navbar')
       
       @yield('content')

        @include('site._layouts.footer')
        
        <script type="text/javascript" src="site/js/jquery.min.js"></script>
        <script src="site/js/bootstrap.min.js"></script>
        <script src="site/js/bootsnav.js"></script>
        <script src="site/js/viewportchecker.js"></script>
        <script src="site/js/bootstrap-select.min.js"></script>
        <script src="site/js/wysihtml5-0.3.0.js"></script>
        <script src="site/js/bootstrap-wysihtml5.js"></script>
        <script src="site/js/jQuery.style.switcher.js"></script>
        <script type="text/javascript" src="site/js/owl.carousel.min.js"></script>
        <script src="site/js/custom.js"></script>
    </div>
</body>

</html>