<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index(){
        $kategoris = Kategori::all();
        $menus = Menu::all();
       return view('menu',[
        'kategoris'=>$kategoris,
        'menus'=>$menus
    
    ]);
    }
}