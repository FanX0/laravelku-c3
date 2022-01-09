<!doctype html>
<html lang="en">
  <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NFT</title>
        {{-- css --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/home.css">
        <link rel="stylesheet" href="/css/jaralax.css">

        <link rel="stylesheet" href="/css/card.css">
        
        
    <!-- Required meta tags -->
 
    <title>{{ $title }}</title>
  </head>
  <body>
  @include('partials.navbar')
    <div class="container mt-4">
        @yield('container')
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
  @include('partials.footer')
          {{-- js --}}

          <script src="js/jarallax.js"></script>
          <script src="js/jarallax-element.js"></script>
          <script type="js/text/javascript">
          jarallax(document.querySelectorAll('.jarallax'), {
                  speed: 0.2
          });
          </script>
          <script type="js/text/javascript">
                  $(window).load(function(){$("centered").delay(3000).fadeOut("slow")
                  ;})
          </script>
          <script type="text/javascript" src="{{URL::asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
          <script type="text/javascript" src="{{URL::asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js')}}"></script>
          <script type="text/javascript" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>   
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>  
</html>