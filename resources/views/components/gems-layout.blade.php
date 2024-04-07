<!DOCTYPE html>
<html>
<head>
<title>{{$title}}</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
    .navbar {
background-color: #F6F4F3;
font-weight:bold;
}
.nav-item a {
color: #fff!important;
}
.navbar-nav {
margin:0 auto;
}
.list-book{
display:grid;
grid-template-columns:repeat(4,24%);
}
.book {
margin:10px;
text-align:center;
}
</style>
<body>
<header style='text-align:center'>
<img src="{{asset('images/banner.png')}}" width="1000px">
</header>
<main style="width:1000px; margin:2px auto;">
<div class='row'>
<div class='col-3 pr-0'>
    <x-menu>
        <x-slot name ='item'>
<nav class="navbar navbar-light">
<ul class="navbar-nav">
<ul class="navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="{{url('gems')}}">Trang chủ</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{url('gems/theloai/1')}}">Vòng đá phong thủy</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{url('gems/theloai/2')}}">Vòng đá trang sức</a>
</li>
</ul>
</ul>
</nav>
</div>
        </x-slot>
    </x-menu>
<div class='col-9'>
{{$slot}}
</div>
</div>
</main>
</body>
</html>