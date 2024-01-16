<!-- destroy.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy People</title>
</head>
<body>
    <h1>Destroy People</h1>

    <form method="POST" action="{{ url("/Rak/55208/people/destroy/{$person->id}") }}">
        @method('DELETE')
        <button type="submit">Destroy</button>
    </form>
</body>
</html>
