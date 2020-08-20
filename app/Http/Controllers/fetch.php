<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class fetch extends Controller
{
    public function show()
    {
       $data= Http::get('https://www.inventorykeeper.net/api/westace/products')->json();
       return view('welcome' ,['data'=>$data]);
    }
}
