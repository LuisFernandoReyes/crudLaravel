@extends('layouts.app')

@section('content')
<a href="{{ route('note.create') }}">Create new note</a>
<ul>
    @forelse ($notes as $note)
        <li><a href="#"> {{ $note->title }}</a> </li>
    @empty
        <p> No hay datos </p>
    @endforelse
</ul>
@endsection