<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" author="Alfonso Marquez" content="width=device-width,
    initial-scale=1, shrink-to-fit=no">

    <meta property="og:title" content="Alfonso Marquez">
    <meta property="og:description" content="Portfolio">
    <meta property="og:image" content="/image/alfonso-1.jpg">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://portfolio-alfonso.herokuapp.com/">

    
    <link rel="icon" href="/image/alfonso-1.jpg">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/> --}}
    <link href="/css/app.css" rel="stylesheet">
    {{-- <script src=" {{ asset('/js/app.js')}} "></script> --}}
    

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;800&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>


    <title>Portfolio | Alfonso</title>
</head>
<body>

    <div id="app" style="overflow: hidden;">  
        @include('inc.navbar')
        @include('inc.header')    
        @yield('main')
        @include('inc.footer')    
    </div>

    <script src="/js/app.js"></script>

</body>
</html>