<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Restore | Ecommerce website Design | @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{url('website/style.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">				<!--Font Awesome 4 cdn-->

    @yield('css')
</head>
<body>

@include('website.layouts.header')

@yield('content')

@include('website.layouts.footer')


@yield('js')

<script src="{{url('website/home.js')}}"></script>
</body>
</html>