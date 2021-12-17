<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
//Halaman Awal...
    public function index()
    {
        return view('home');
    }
    public function kantin1()
    {
        return view('kantin1');
    }
    public function kantin2()
    {
        return view('kantin2');
    }
    public function kantin3()
    {
        return view('kantin3');
    }
//Simpan Pesanan => Dat base

    public function simpanpesanan(Request $request)
    {
       // $id = $request->input('nama');
        // echo $id;
        // $mj = $request->input('meja');
        // echo $mj;
        //dd($request->input());
        //echo $request->input('nama');

        $data = 
        [
            'nama' => $request->input('nama'),
            'mj' => $request->input('meja'),
            'mnu1' => $request->input('menu1'),
            'mnu2' => $request->input('menu2'),
            'mnu3' => $request->input('menu3'),
            'mnu4' => $request->input('menu4'),
            'mnu5' => $request->input('menu5'),
            'mnu6' => $request->input('menu6'),
        ];
        dd($data);
    }
}
