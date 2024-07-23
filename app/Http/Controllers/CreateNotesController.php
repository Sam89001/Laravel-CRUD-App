<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class CreateNotesController 
{

    public function CreateNote(Request $request) {
    $incomingFields = $request->validate([
      'note_title' => ['required', 'min:1', 'max:50'], //Validation
			'note_description' => ['required', 'min:1', 'max:500']
    ]);

		$noteData = [ // binds to the model and sanitises
      'title' => strip_tags($incomingFields['note_title']),
      'content' => strip_tags($incomingFields['note_description'])
    ];

		Notes::create($noteData); //Connects to the model
     return redirect('/');
   }
}
