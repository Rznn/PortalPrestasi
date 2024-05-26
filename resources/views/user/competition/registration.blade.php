<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
    <h1>Registration Competition #1</h1>
    <form action="{{ route('user.competition.store', $competitions->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <h3>{{ $competitions->name }}</h3>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ $users->email }}" placeholder="Enter Competition Rules" readonly required>

        <label for="fullname">Full Name</label>
        <input type="text" name="fullname" id="fullname"  placeholder="Enter Full Name" required>

        <label for="nik">NIK</label>
        <input type="text" name="nik" id="nik" placeholder="Enter NIK" required>

        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" placeholder="Enter NIM" required>

        <label for="instance">Instance</label>
        <input type="text" name="instance" id="instance" placeholder="Enter Instance" required>

        <label for="department">Department</label>
        <input type="text" name="department" id="department" placeholder="Enter Department" required>

        <input type="submit" class="button" value="Submit">
    </form>
</body>
</html>
