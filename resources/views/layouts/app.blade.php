<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Favicon -->
    <link rel="icon" href="/assets/images/favicon.svg" type="image/svg+xml">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/svg+xml">
    <!-- SEO (Optional but Recommended) -->
    <meta name="description" content="@yield('meta_description', 'Merchant Management Dashboard')">
    <meta name="author" content="Your Company Name">
    <!-- Global Styles -->
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/sidebar.css">
    <link rel="stylesheet" href="/assets/css/header.css">

    <!-- Page Specific Styles -->
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@stack('scripts')

</body>
</html>
