<!-- create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create People</title>
</head>
<body>
    <h1>Create People</h1>

    <form method="POST" action="{{ route('create') }}">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required>
        
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" required>

        <label for="street">Street:</label>
        <input type="text" name="street" required>

        <label for="city_country">City/Country:</label>
        <input type="text" name="city_country" required>

        <button type="submit">Create</button>
    </form>
</body>
</html>
