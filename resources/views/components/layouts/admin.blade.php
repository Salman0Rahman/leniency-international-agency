<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Admin Panel' }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
    <aside class="sidebar">
        <h3>Admin</h3>
        <a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a>
        <a href="{{ route('home') }}" target="_blank">Website dekho</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </aside>

    <main class="content">
        {{ $slot }}
    </main>
</body>
</html>
