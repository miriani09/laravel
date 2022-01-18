<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">


    <script src="{{asset('public/OwlCarousel2-2.3.4/docs_src/assets/vendors/jquery.min.js')}}"></script>
    <script src="{{asset('OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <title>Document</title>
</head>
<body>
    @include('.auth.dashboard')
    @include('.blocks.container')

</body>
</html>
