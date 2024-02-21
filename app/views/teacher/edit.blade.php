<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<?php

?>

<body>
    <form action=" {{route("teacher/update/")}}{{$teachers->id}}" method="post">
        @csrf
        @method('POST')
        <label for="name_category">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $teachers->name }}">
        </label><br>


        <label for="email">
            <strong>email:</strong>
            <input type="email" name="email" value="{{ $teachers->email }}">
        </label><br>
        <label for="salary">
            <strong>salary:</strong>
            <input type="text" name="text" value="{{ $teachers->salary }}">
        </label><br>
        <label for="school">
            <strong>school:</strong>
            <input type="text" name="school" value="{{ $teachers->school }}">
        </label><br>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <a href=" {{route("/")}}"> List</a>
</body>

</html>