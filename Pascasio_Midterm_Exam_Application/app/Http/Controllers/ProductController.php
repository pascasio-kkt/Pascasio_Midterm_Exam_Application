<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
{
    $animeProducts = [
        [
            'name' => 'Given', 
            'author' => 'Natsuki Kizu', 
            'year' => 2019, 
            'price' => 100, 
            'image' => 'https://example.com/images/given.jpg'
        ],
        [
            'name' => 'Yuri on Ice', 
            'author' => 'Sayo Yamamoto', 
            'year' => 2016, 
            'price' => 200, 
            'image' => 'https://example.com/images/yuri_on_ice.jpg'
        ],
        [
            'name' => 'Doukyuusei', 
            'author' => 'Asumiko Nakamura', 
            'year' => 2016, 
            'price' => 300, 
            'image' => 'https://example.com/images/doukyuusei.jpg'
        ],
        [
            'name' => 'Sasaki to Miyano', 
            'author' => 'Shou Harusono', 
            'year' => 2022, 
            'price' => 400, 
            'image' => 'https://example.com/images/junjou_romantica.jpg'
        ],
        [
            'name' => 'Hitorijime My Hero', 
            'author' => ' Memeco Arii', 
            'year' => 2017, 
            'price' => 500, 
            'image' => 'https://example.com/images/junjou_romantica.jpg'
        ],
        [
            'name' => 'Banana Fish', 
            'author' => 'Akimi Yoshida', 
            'year' => 2018, 
            'price' => 600, 
            'image' => 'https://example.com/images/junjou_romantica.jpg'
        ],
        [
            'name' => 'No. 6', 
            'author' => 'Shungiku Nakamura', 
            'year' => 2008, 
            'price' => 700, 
            'image' => 'https://example.com/images/junjou_romantica.jpg'
        ],
        [
            'name' => 'The Stranger By The Beach', 
            'author' => 'Kanna Kii', 
            'year' => 2020, 
            'price' => 800, 
            'image' => 'https://example.com/images/junjou_romantica.jpg'
        ],
    ];

    return view('welcome', compact('animeProducts'));
}
}
