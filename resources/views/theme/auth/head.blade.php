<head>
    <title>{{config('app.name') . ': ' .$title ?? config('app.name')}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{config('app.name') . ': ' .$title ?? config('app.name')}}" />
    <meta property="og:url" content="https://upi.dev" />
    <meta property="og:site_name" content="{{config('app.name')}}" />
 <!-- Favicon Icon -->
 <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo.png')}}">
    
 <!-- Animation CSS -->
 <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">	
 <!-- Latest Bootstrap min CSS -->
 <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
 <!-- Google Font -->
 <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;display=swap" rel="stylesheet"> 
 <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet"> 
 <!-- Icon Font CSS -->
 <link rel="stylesheet" href="/assets/css/all.min.css">
 <link rel="stylesheet" href="/assets/css/ionicons.min.css">
 <link rel="stylesheet" href="/assets/css/themify-icons.css">
 <link rel="stylesheet" href="/assets/css/linearicons.css">
 <link rel="stylesheet" href="/assets/css/flaticon.css">
 <link rel="stylesheet" href="/assets/css/simple-line-icons.css">
 <!--- owl carousel CSS-->
 <link rel="stylesheet" href="/assets/owlcarousel/css/owl.carousel.min.css">
 <link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.css">
 <link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.default.min.css">
 <!-- Magnific Popup CSS -->
 <link rel="stylesheet" href="/assets/css/magnific-popup.css">
 <!-- Slick CSS -->
 <link rel="stylesheet" href="/assets/css/slick.css">
 <link rel="stylesheet" href="/assets/css/slick-theme.css">
 <!-- Style CSS -->
 <link rel="stylesheet" href="/assets/css/style.css">
 <link rel="stylesheet" href="/assets/css/responsive.css">

 <!-- Hotjar Tracking Code for bestwebcreator.com -->
 <script>
     (function(h,o,t,j,a,r){
         h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
         h._hjSettings={hjid:2073024,hjsv:6};
         a=o.getElementsByTagName('head')[0];
         r=o.createElement('script');r.async=1;
         r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
         a.appendChild(r);
     })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
 </script>
</head>