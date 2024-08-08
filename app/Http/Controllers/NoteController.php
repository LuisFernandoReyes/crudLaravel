<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    public function index():view {
        $notes= Note::all();

        return view('note.index', compact('notes'));

    }

    public function create():view{
        return view('note.create');
    }

    public function store(NoteRequest $request):RedirectResponse{
        //better method because I used the rigth names in the form:

            Note::create($request->all());
            return redirect()->route('note.index')->with('success', 'Note Created');

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

    public function update(NoteRequest $request, Note $note):RedirectResponse{

        $note->update($request->all());
        return redirect()->route('note.index')->with('Success', 'Note Updated');
    }
    public function show(Note $note):view{
        return view('note.showNote', compact('note'));

    }
    public function destroy(Note $note):RedirectResponse{
        $note->delete();
        return redirect()->route('note.index')->with('danger','Note deleted');
    }


}
