<?php

namespace App\Http\Controllers;
use App\Models\Note;

abstract class Controller
{
    public function index(){
        $notes= Note::all();

        return view('note.index', compact('notes'));

    }

    public function create(){
        return view('note.create');
    }
}
