<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/note.css') }}">
  </head>

  <body class="body-styles">
    <h1>PHP Notes CRUD App</h1>

    <div class="button-container">
      <a class="button-styles" href="{{ url('createnote') }}">Create Note</a>
    </div>

    <div class="notes-container">
      <div class="notes-grid">
      @foreach($notes as $note)
        <div class="note-styles" id="note-{{ $note->id }}">
            <div class="note-content">
                <h2 class="note-text">{{ $note['title'] }}</h2>
                <p class="note-text">{{ $note['content'] }}</p>

                <div class="note-links-container">
                    <a class="note-link" href="{{ url('/editnote/' . $note->id) }}">Update</a>

                    <form action="{{ url('/deletenote/' . $note->id) }}" method="POST" style="margin: 0;">
                      @csrf
                      @method('DELETE') <!-- This is required to spoof the DELETE request -->
                      <button class="note-button" type="submit" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                  </form>

                </div>
            </div>
        </div>
      @endforeach
      </div>
    </div>
  </body>
</html>
