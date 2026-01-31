<!DOCTYPE html>
<html>

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Polk</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="{{ asset ('assets2/css/bootstrap.min.css')}}">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="{{ asset ('assets2/css/style.css')}}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{ asset ('assets2/css/responsive.css')}}">
   <!-- fevicon -->
   <link rel="icon" href="{{ asset ('assets2/images/fevicon.png')}}" type="image/gif" />
   <!-- fonts -->
   <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@400;600&display=swap"
      rel="stylesheet">
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{ asset ('assets2/css/jquery.mCustomScrollbar.min.css')}}">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body>
    @include('partials.header')
    @include('partials.banner')
    @include('partials.about')
    @yield('content')
    @include('partials.design')
    @include('partials.company')
    @include('partials.client')
    @include('partials.new')
    @include('partials.contact')
    @include('partials.footer')
    @include('partials.copyright')
    @include('partials.script')
    


</body>