<!DOCTYPE html>
<html>
    <head>
        <title>{{$title}}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            /* Định dạng màu nền và màu chữ của menu */
            .navbar {
                background-color: #340a0a;
                max-width:1423px;
                font-weight:bold;
                margin:0 auto;

            }
            .nav-item a
            {
                color: #ffffff;
            }

            .list-gems
            {
                display:grid;
                grid-template-columns:repeat(5,20%);
                gap: 20px;
            }
            .gems
            {
                margin:10px;
                margin-bottom: 20px;
                text-align:center;
            }
            . btn-custom
            {
                background-color: #deb887;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <header style='text-align:center'>
            <img src="{{asset('images/banner.png')}}" width="1423px">
            <nav class="navbar navbar-light navbar-expand-sm">
                <div class='container-fluid p-0'>
                    <div class='col-9 p-0'>
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
                    </div>
                    <div class='col-3 p-0 d-flex justify-content-end'>
                        @auth
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-custom" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('account')}}">Quản lý</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" onclick="event.preventDefault();
                                                        this.closest('form').submit();">Đăng xuất</a>
                                </form>
                                </div>
                            </div>
                        @else
                            <a href="{{ route('login') }}">
                                <button class='btn btn-sm btn-custom'>Đăng nhập</button>
                            </a>&nbsp;
                            <a href="{{ route('register') }}">
                                <button class='btn btn-sm btn-success'>Đăng ký</button>
                            </a>
                        @endauth
                </div>
            </nav>
        </header>
        <main style="width:1000px; margin:2px auto;">
            <div class='row'>
                <div class='col-12'>
                   {{$slot}}
                </div>
            </div>
        </main>
    </body>
</html>