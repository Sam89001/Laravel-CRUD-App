<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Note</title>
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
  </head>

  <body class="forms-body-styles">
    <h1 class="forms-header">Create a New Note</h1>
    <form action="{{ url('createnote/create') }}" method="post">
      <!-- Protects you from third party sites abusing your cookies-->
      @csrf
      <label for="note_title">Title:</label>
      <input type="text" id="note_title" name="note_title" required><br><br>

      <label for="note_description">Description:</label>
      <textarea id="note_description" name="note_description" required></textarea><br><br>

      <button type="submit">Create Note</button>
    </form>
  </body>
</html>