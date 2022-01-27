
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Welcome to Our Website</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />


  <link rel="stylesheet" href="{{url('/website/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{url('/website/css/maicons.css')}}">

  <link rel="stylesheet" href="{{url('/website/vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{url('/website/vendor/animate/animate.css')}}">
<link rel="stylesheet" href="/website/css/style.css">
  <link rel="stylesheet" href="{{url('/website/css/theme.css')}}">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Back to top button -->
  

@include('website.fixed.header')




@yield('content')


   <!-- .banner-home -->

{{-- <footer class="page-footer">
    <p id="copyright">Copyright &copy; 2022 <a href="" target="_blank">Tahmina Urmi</a>. All right reserved</p>
  
</footer> --}}
@include('website.fixed.footer')



<script src="{{url('/website/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{url('/website/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{url('/website/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{url('/website/vendor/wow/wow.min.js')}}"></script>

<script src="{{url('/website/js/theme.js')}}"></script>
  
</body>
</html>