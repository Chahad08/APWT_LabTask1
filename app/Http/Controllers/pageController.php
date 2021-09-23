<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home (){
        return view ('pages.home');
    }
    public function about(){
        return view ('pages.about');
    }
    public function product(){
        $product = [
            'itemone' => 'Laptop',
            'itemtwo' => 'Mobile',
            'itemthree' => 'Desktop'

        ];
        return view ('pages.product')->with('product',$product);
    }
    public function teams(){
        return view ('pages.teams');
    }
    public function contact (){
        return view ('pages.contact');
    }
   
}
