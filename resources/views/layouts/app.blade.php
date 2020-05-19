<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" author="Alfonso Marquez" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;800&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>

    <title>Portfolio | Alfonso</title>
</head>
<body>

    @include('inc.navbar')
    @include('inc.header')

    <div id="app">      
        @yield('content')
    </div>

    <script src=" {{ asset('/js/app.js')}} "></script>
</body>
</html>