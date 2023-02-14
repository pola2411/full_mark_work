<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Full Mark Work</title>
    <link rel="stylesheet" href="{{asset('front/css/servdetails.css')}}" />

    <link rel="stylesheet" href="{{asset('front/css/lib/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}" />
    <link rel="shortcut icon" href="{{asset('front/images/logo.png')}}" type="image/x-icon" />
  </head>
  <body dir="rtl">
    <!-- start home button -->
    <div class="arrow">
      <span><img src="{{asset('front/images/arrow-up-circle-fill.svg')}}" alt="arrow" /></span>
    </div>
    <!-- start chaticon -->
    <div class="chaticon">
      <a href="chat.html"><span><img src="{{asset('front/images/icons/chat-dots.svg')}}" alt="chat" /></span></a>
    </div>

    @include('layouts.ex.top')


    @include('layouts.ex.start_nav')
    @yield('content')























    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.js')}}"></script>
    <script src="{{asset('front/js/script.js')}}"></script>
  </body>
</html>
