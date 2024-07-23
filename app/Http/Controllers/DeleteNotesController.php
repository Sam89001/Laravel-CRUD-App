<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class DeleteNotesController
{
   public function deleteNote(Notes $note) {
     $note->delete();
     return redirect('/');
   }
}
