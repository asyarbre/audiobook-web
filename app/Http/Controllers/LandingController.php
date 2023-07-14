<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    function index(){
        $data = [
            'judul'=>[
                'header' => 'AudioBook Polimedia',
                'kategori_semua' => 'All Categories',
                'kategori_fiksi' => 'Fiksi',
                'kategori_anak' => 'Anak',
            ]
        ];
        return view("landing/index")->with($data);
    }

    function title(){
      
    }

    function detailData(){

    }
}
