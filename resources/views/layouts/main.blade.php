<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<header style='text-align:center'>
<img src="{{asset('images/banner.png')}}" width="1000px">
</header>
<main>
@yield('content')
</main>
<footer>
<div class='row' style='text-align:center'>
<div class='col-4'>THÔNG TIN CHUNG</div>
</div>
</footer>
</body>
</html>