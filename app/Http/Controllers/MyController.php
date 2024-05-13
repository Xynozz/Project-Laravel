<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function introduce()
    {
        $data = [
            "nama"=>"Asep",
            "alamat"=>"Bandung",
            "agama"=>"Islam",
            "jk"=>"L",
            "hobi"=> [
                "Mancing", "Ngurek", "Guyam-Gayem"
            ],
        ];
        return view('latihan.perkenalan',compact('data'));
    }
    public function animals(){
        $animals = [
            "Lion", "Crocodile", "Rabbit", "Eagle",
        ];
        return view('latihan.animals', ['hewan' => $animals]);
    }
}
