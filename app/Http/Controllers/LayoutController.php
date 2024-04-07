<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ViduLayoutController extends Controller
{
    function gems()
    {
    return view("layouts.gems");
    }

    function loaisanpham($id)
    {
    $data = DB::select("select * from sach where loai_san_pham = ?",[$id]);
    return view("layouts.index", compact("data"));
    }
    function chitiet($id)
    {
    $data = DB::select("select * from gems where id = ?",[$id])[0];
    return view("layouts.detail",compact("data"));
    }
}