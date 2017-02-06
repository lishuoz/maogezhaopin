<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="猫哥招聘是多伦多地区招聘找工作网站,提供多伦多地区真实的招聘找工作信息,工资透明真实,找工作,招聘网,寻人才就来猫哥招聘,多伦多找工作首选猫哥招聘">
  <meta name="keywords" content="招聘,找工作,招聘网,人才网,多伦多">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>猫哥招聘-多伦多招聘招工作平台_找工作_招聘_人才网_求职</title>

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">
  <link rel="icon" href="/img/favicon.png">

  <!-- Scripts -->
  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
      ]); ?>
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-74984891-2', 'auto');
      ga('send', 'pageview');
    </script>
  </head>
  <body>
    <div id="app">
      @section('navbar')
      @include('partials.navbar')
      @show

      @yield('content')

      @section('footer')
      <info-footer></info-footer>
      @show        
    </div>

    @yield('script.footer')
    <!-- Scripts -->
    <script src="/js/app.js"></script>

  </body>
  </html>
