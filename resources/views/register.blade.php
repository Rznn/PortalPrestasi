<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="name" name="name" id="name"  placeholder="Enter your name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email"  placeholder="Enter your email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" autocomplete="new-password"  placeholder="Enter password" required>

        <label for="password">Confirm Password</label>
        <input type="password" type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" placeholder="Confirm password" required>

        <input type="submit" class="button" value="Sign in">
    </form>

    @if ($errors->any())
    <script>
        var errorMessage = @json($errors->all());
        alert(errorMessage.join('\n'));
    </script>
    @endif
</body>
</html>
