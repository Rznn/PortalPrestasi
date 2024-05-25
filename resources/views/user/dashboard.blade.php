<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome User</h1>
    <a href="{{ route('user.competition.index') }}">Competition</a>
    <a href="{{ route('user.scholarship.index') }}">Scholarship</a>
    <a href="{{ route('user.work.index') }}">Job Vacancies</a>
    <a href="{{ route('user.activity.index') }}">Active</a>
    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>
