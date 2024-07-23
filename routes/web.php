<?php

use App\Models\Notes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditNotesController;
use App\Http\Controllers\CreateNotesController;
use App\Http\Controllers\DeleteNotesController;

Route::get('/', function () {
    $notes = Notes::all();
    return view('home', ['notes' => $notes]);
});
Route::get('/createnote', function () {
    return view('createnote');
});
Route::get('/editnote/{note}', [EditNotesController::class, 'displayEditScreen']);

Route::post('/createnote/create', [CreateNotesController::class, 'CreateNote']);
Route::put('/editnote/{note}', [EditNotesController::class, 'updateNote']);
Route::delete('/deletenote/{note}', [DeleteNotesController::class, 'deleteNote']);
