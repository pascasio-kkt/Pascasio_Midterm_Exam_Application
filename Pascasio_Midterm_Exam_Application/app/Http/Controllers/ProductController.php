<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $animeProducts = [
            'Given',
            'No.6',
            'Yuri on Ice',
            'Doukyuusei (Classmates)',
            'Sasaki to Miyano',
            'Hitorijime My Hero',
            'Banana Fish'
        ];

        return view('welcome', compact('animeProducts'));
    }
}
