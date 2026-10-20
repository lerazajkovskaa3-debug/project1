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
    
    public $array = [
        ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'pic1.jpg'],
        ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => 'pic2.jpg'],
        ['id' => 3, 'title' => 'продукт 3', 'price' => 900, 'path' => 'pic3.jpg'],
        ['id' => 4, 'title' => 'продукт 4', 'price' => 1200, 'path' => 'pic4.jpg'],
        ['id' => 5, 'title' => 'продукт 5', 'price' => 700, 'path' => 'pic1.jpg'],
        ['id' => 6, 'title' => 'продукт 6', 'price' => 2000, 'path' => 'pic2.jpg'],
        ['id' => 7, 'title' => 'продукт 7', 'price' => 1000, 'path' => 'pic3.jpg'],
        ['id' => 8, 'title' => 'продукт 8', 'price' => 1800, 'path' => 'pic4.jpg'],
];
    

    public function showArray()
    {
        $array = $this->array;
        return view('array', compact('array'));
    }
    
    public function shuffleArray()
    {
        $array = $this->array;
        shuffle($array);
        return view('array', compact('array'));
    }

    public function sortArray()
    {
        $array = $this->array;
        usort($array, function ($a, $b) {
            return $a['price'] <=> $b['price'];
        });
    return view('array', compact('array'));
    }

    public function filterArray()
    {
        $array = $this->array;
        $array = array_filter($array, function ($item) {
            return $item['price'] > 1000;
        });
    return view('array', compact('array'));
    }

    public function new(){
        $array = $this->array[0];
        return view('vtoraya', compact('array'));
    }
}
