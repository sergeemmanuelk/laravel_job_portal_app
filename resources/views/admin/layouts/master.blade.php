<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            {{-- START NAVBAR --}}
            @include('admin.partials.navbar')
            {{-- END NAVBAR --}}

            {{-- START SIDEBAR --}}
            @include('admin.partials.sidebar')
            {{-- START SIDEBAR --}}

            {{-- START MAIN CONTENT --}}
            <div class="main-content">
                @yield('content')
            </div>
            {{-- END MAIN CONTENT --}}

            <footer class="main-footer">
                @include('admin.partials.footer')
            </footer>
        </div>
    </div>

    @include('admin.partials.scripts')
</body>

</html>
