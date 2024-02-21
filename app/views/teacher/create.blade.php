<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
</head>
<body>
<form action="{{route("teacher/add")}}" method="post" >
        @csrf
        @method('POST')

        <label for="name">
            <strong>Name:</strong>
            <input type="text" name="name" id="name">
        </label><br>

        <label for="email">
            <strong>Email:</strong>
            <input type="email" name="email" id="email">
        </label><br>
        <label for="salary">
            <strong>Salary:</strong>
            <input type="number" name="salary" id="salary">
        </label><br>

        <label for="school">
            <strong>School:</strong>
            <input type="text" name="school" id="school">
        </label><br>
       

        <button type="submit">Create</button>
    </form>
</body>
</html>