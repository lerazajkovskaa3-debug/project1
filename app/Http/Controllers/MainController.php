<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Laravel\Prompts\title;

class MainController extends Controller
{
    public function showIndex()
    {
        return view ('home');
    }

    public function showArray()
    {
        $array = [
            ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'pic1.jpg'],
            ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => 'pic2.jpg'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 900, 'path' => 'pic3.jpg'],
            ['id' => 4, 'title' => 'продукт 4', 'price' => 1200, 'path' => 'pic4.jpg'],
            
        ];

        return view('array', compact('array'));
    }
}
