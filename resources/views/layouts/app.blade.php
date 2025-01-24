<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel Application' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1; /* Makes content take the remaining space */
        }
        footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 0;
            position: relative;
        }
        .sidebar {
            padding: 15px;
            background-color: #f8f9fa;
            height: 100%;
        }
        .sidebar .btn {
            margin-bottom: 10px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .sidebar .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>
    @include('includes.header')

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar">
                @include('includes.menu')
            </nav>

            <main class="col-md-10 ms-sm-auto px-md-4 content">
                @yield('content')
            </main>
        </div>
    </div>

    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
