<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.cms.layout.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('backend.cms.layout.navbar')
        @include('backend.cms.layout.sidebar')
        @yield('content')
        @include('backend.cms.layout.footer')
    </div>

    @include('backend.cms.layout.javascript')
</body>

</html>
