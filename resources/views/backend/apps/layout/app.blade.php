<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.apps.layout.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('backend.apps.layout.navbar')
        @include('backend.apps.layout.sidebar')
        @yield('content')
        @include('backend.apps.layout.footer')
    </div>

    @include('backend.apps.layout.javascript')
</body>

</html>
