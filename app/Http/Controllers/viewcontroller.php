<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewcontroller extends Controller
{
    function showform (){
        return view ('praktikum2');
    }
    function tugas4 (){
        return view ('tugas4');
    }
    function ets (){
        return view ('ets');
    }
    function php (){
        return view ('tugasphp');
    }
}
