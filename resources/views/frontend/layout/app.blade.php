<!DOCTYPE html>
<html lang="id">

<head>
    @include('frontend.layout.head')
</head>

<body>
    @include('frontend.layout.navbar')
    @yield('content')
    @include('frontend.layout.footer')

    <a href="https://wa.me/213123213?text=asdsadsad" class="float bounce" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    @include('frontend.layout.javascript')
</body>

</html>
