<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>StudentCollege</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .custom-navbar {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        

        .custom-navbar .nav-link {
            color: #333;
            transition: color 0.3s, background-color 0.3s;
        }

        .custom-navbar .nav-link:hover {
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
        }

        .custom-navbar .navbar-brand {
            font-weight: bold;
            color: #007bff;
            transition: transform 0.3s ease, color 0.3s ease; /* Smooth transition */
        }

        .custom-navbar .navbar-brand:hover {
            color: #0056b3;
            transform: scale(1.1); /* Slight zoom effect */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Assignment</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('colleges.index') }}">Colleges</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('content')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>