<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function informasi()
    {

        return view('informasi');
    }

    public function welcome()
    {

        return view('welcome');
    }

    public function visimisi()
    {

        return view('visimisi');
    }

    public function daycare()
    {

        return view('daycare');
    }

    public function pendidikan()
    {

        return view('pendidikan');
    }

    public function komite()
    {

        return view('komite');
    }

    public function daftar()
    {

        return view('news.daftar');
    }

    public function daftarsd()
    {

        return view('news.daftarsd');
    }

    public function daftarguru()
    {

        return view('news.daftarguru');
    }
}
