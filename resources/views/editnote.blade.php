<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note</title>
    <link rel="stylesheet" href="../css/forms.css"/>
</head>

<body class="forms-body-styles">
    <h1 class="forms-header">Edit Note</h1>
    <form action="{{ url('/editnote/' . $note->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="note_title">Title:</label>
        <input type="text" id="note_title" name="note_title" required value="{{$note->title}}"><br><br>

        <label for="note_description">Description:</label>
        <textarea id="note_description" name="note_description" required>{{$note->content}}</textarea><br><br>

        <button type="submit">Update Note</button>
    </form>
</body>

</html>