<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Étlap',
            'content' => ''
        ];
    
        return view('menu.etlap', $data);
    }
}