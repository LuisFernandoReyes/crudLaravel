<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/note/{id}', [NoteController::class, 'index'])->name('note.index');