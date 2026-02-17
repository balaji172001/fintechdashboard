<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/base.css">
<link rel="stylesheet" href="/assets/css/sidebar.css">
<link rel="stylesheet" href="/assets/css/header.css">

    @stack('page-specific-styles')

</head>
<body>

<div class="admin_layout">

    @include('components.sidebar')

    <div class="admin_right_section">
        @include('components.header', ['title' => 'Dashboard'])

        <div class="admin_content">
            @yield('content')
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@stack('scripts')

</body>
</html>
