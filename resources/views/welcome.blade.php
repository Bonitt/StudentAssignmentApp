<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Students App</title>
    </head>
    <body class="antialiased">
        <div>
            <a href="{{ route('students.index') }}">Students</a>
        </div>
    </body>
</html>