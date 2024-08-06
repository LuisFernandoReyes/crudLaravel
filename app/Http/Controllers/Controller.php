<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;

abstract class Controller
{
    public function index(){
        $notes= Note::all();

        return view('note.index', compact('notes'));

    }

    public function create(){
        return view('note.create');
    }

    public function store(Request $request){
        //better method because I used the rigth names in the form:
            Note::create($request->all());
            return redirect()->route('note.index');

            /* first method
        $note= new Note;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();
            */

        // second method
                /*
        Note::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
                */
    }

    public function edit(Note $note){
        return view('note.edit', compact('note'));
    }
}
