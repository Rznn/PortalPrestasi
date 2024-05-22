<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Competition</title>
</head>
<body>
    <h1>Create Competition</h1>
    <form action="{{ route('competition.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Competition Name</label>
        <input type="text" name="name" id="name"  placeholder="Enter Competition Name" required>

        <label for="organizer">Organizer</label>
        <input type="text" name="organizer" id="organizer" placeholder="Enter Competition Organizer" required>

        <label for="description">Description</label>
        <textarea name="description" id="description" placeholder="Enter Competition Description" cols="30" rows="10"></textarea>

        <label for="rules">Rule's Link</label>
        <input type="url" name="rules" id="rules" placeholder="Enter Competition Rules" required>

        <label for="image">Photo</label>
        <input type="file" name="image" id="image" required>

        <br>

        <label for="start_registration">Start Registration</label>
        <input type="date" name="start_registration" id="start_registration" required>

        <label for="end_registration">End Registration</label>
        <input type="date" name="end_registration" id="end_registration" required>

        <label for="start_competition">Start Competition</label>
        <input type="date" name="start_competition" id="start_competition" required>

        <label for="end_competition">End Competition</label>
        <input type="date" name="end_competition" id="end_competition" required>

        <br>

        <input type="submit" class="button" value="Submit">
    </form>
</body>
</html>
