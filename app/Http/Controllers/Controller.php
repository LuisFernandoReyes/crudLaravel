<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index($id){
        return view('note.index', compact('id'));
    }
}
