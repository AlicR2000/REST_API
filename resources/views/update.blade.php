<!-- update.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update People</title>
</head>
<body>
    <h1>Update People</h1>

    <form method="POST" action="{{ route('update', ['id' => $person->id]) }}">

        @method('PUT')

        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required value="{{ $person->first_name }}">
        
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required value="{{ $person->last_name }}">

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" required value="{{ $person->phone_number }}">

        <label for="street">Street:</label>
        <input type="text" name="street" required value="{{ $person->street }}">

        <label for="city_country">City/Country:</label>
        <input type="text" name="city_country" required value="{{ $person->city_country }}">

        <button type="submit">Update</button>
    </form>
</body>
</html>
