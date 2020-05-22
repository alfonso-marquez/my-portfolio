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



    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/> --}}
    <link href="/css/app.css" rel="stylesheet">
    {{-- <script src=" {{ asset('/js/app.js')}} "></script> --}}
    

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;800&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>

     <link rel="icon" href="/image/alfonso-1.jpg">

    <title>Portfolio | Alfonso</title>
</head>
<body>


    <div id="app" style=" overflow: hidden;">  
        @include('inc.navbar')
        @include('inc.header')    
        @yield('main')
        @include('inc.footer')    
    </div>

    <script src="https://sdk.scdn.co/spotify-player.js"></script>
    <script>
      window.onSpotifyWebPlaybackSDKReady = () => {
        const token = 'BQCI98oOcPbjZ-0__vu3MO0iwOlgm1drW-r4o-TLDbVxsECVFg9QFoc-zrUDpiiCv60pfEhFuFabZInbnjk8Wl6pEme3RlPiEUTW5qppU5YmrSqA_y9G01gqemfAp1gAg6a4S_9wovCS7-hbqjWkbfcXJvXv1YcavCbubw';
        const player = new Spotify.Player({
          name: 'Web Playback SDK Quick Start Player',
          getOAuthToken: cb => { cb(token); }
        });
  
        // Error handling
        player.addListener('initialization_error', ({ message }) => { console.error(message); });
        player.addListener('authentication_error', ({ message }) => { console.error(message); });
        player.addListener('account_error', ({ message }) => { console.error(message); });
        player.addListener('playback_error', ({ message }) => { console.error(message); });
  
        // Playback status updates
        player.addListener('player_state_changed', state => { console.log(state); });
  
        // Ready
        player.addListener('ready', ({ device_id }) => {
          console.log('Ready with Device ID', device_id);
        });
  
        // Not Ready
        player.addListener('not_ready', ({ device_id }) => {
          console.log('Device ID has gone offline', device_id);
        });
  
        // Connect to the player!
        player.connect();
      };
    </script>

    <script src="/js/app.js"></script>
</body>
</html>