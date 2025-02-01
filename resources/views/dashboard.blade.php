<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Project Management System</title>
    <link rel="stylesheet" href="{{ asset('backend/styles.css') }}">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
      @include('layouts.sidebar')

        <div class="main-content">
            <!-- Header -->
           @include('layouts.header')

            <!-- Main Dashboard Content -->
          @yield('content')
            <!-- Footer -->
         @include('layouts.footer')
        </div>
    </div>
</body>
</html>