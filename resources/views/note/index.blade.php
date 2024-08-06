@extends('layouts.app')

@section('content')
<a href="{{ route('note.create') }}">Create new note</a>
<ul>
    @forelse ($notes as $note)
        <li><a href="#"> {{ $note->title }}</a> |
            <a href="{{ route('note.edit', $note->id) }}">Edit</a> |
            <a href="#">Delete</a>

        </li>
    @empty
        <p> No hay datos </p>
    @endforelse
</ul>
@endsection
