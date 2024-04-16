<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
    .navbar {
background-color: #340a0a;
font-weight:bold;
}
.nav-item a {
color: #ffffff;
}
.navbar-nav {
margin:0 auto;
}
.list-gems{
display:grid;
grid-template-columns:repeat(4,24%);
}
.gems {
margin:10px;
text-align:center;
}
</style>
<body>
<header style='text-align:center'>
<img src="{{asset('images/banner.png')}}" width="1423px">
</header>
<main style="width:1400px; margin:2px auto;">
<div class='row'>
<div class='col-3 pr-0'>
<nav class="navbar navbar-light">
<ul class="navbar-nav">
<ul class="navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="{{url('gems')}}">Trang chủ</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{url('gems/loaisanpham/1')}}">Vòng đá phong thủy</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{url('gems/loaisanpham/2')}}">Vòng đá trang sức</a>
</li>
</ul>
</ul>
</nav>
</div>
<div class='col-9'>
@yield('content')
</div>
</div>
</main>
</body>
</html>