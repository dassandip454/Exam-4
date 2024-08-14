<!DOCTYPE html>
<html>
<head>
    <title>Create Contact</title>
</head>
<body>
    <h1>Create Contact</h1>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br>
        <label>Phone:</label>
        <input type="text" name="phone" value="{{ old('phone') }}">
        <br>
        <label>Address:</label>
        <input type="text" name="address" value="{{ old('address') }}">
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
