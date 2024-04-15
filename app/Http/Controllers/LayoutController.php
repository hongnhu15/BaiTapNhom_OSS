<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class LayoutController extends Controller
{
    function gems()
    {
        $data = DB::select("select * from gems order by gia_ban asc limit 0,8");
        return view("maugems.index", compact("data"));
    }

    function loaisanpham($id)
    {
    $data = DB::select("select * from gems where loai_san_pham = ?",[$id]);
    return view("maugems.index", compact("data"));
    }
    function chitiet($id)
    {
    $data = DB::select("select * from gems where id = ?",[$id])[0];
    return view("maugems.detail",compact("data"));
    }
}