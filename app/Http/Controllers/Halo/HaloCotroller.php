<?php

namespace App\Http\Controllers\Halo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HaloCotroller extends Controller
{ 
    public function coba() {

        $nama = 'Rahman';
        $data = ['myName' => $nama];
        return view('coba.halo', $data );
    }
}