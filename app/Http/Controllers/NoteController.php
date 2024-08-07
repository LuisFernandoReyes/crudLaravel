<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NoteController extends Controller
{
    public function index():view {
        $notes= Note::all();

        return view('note.index', compact('notes'));

    }

    public function create():view{
        return view('note.create');
    }

    public function store(Request $request):RedirectResponse{
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

    public function edit(Note $note):view{
        return view('note.edit', compact('note'));
    }

    public function update(Request $request, Note $note):RedirectResponse{
        $note->update($request->all());
        return redirect()->route('note.index');
    }
    public function show(Note $note):view{
        return view('note.showNote', compact('note'));

    }
    public function destroy(Note $note):RedirectResponse{
        $note->delete();
        return redirect()->route('note.index');
    }


}
