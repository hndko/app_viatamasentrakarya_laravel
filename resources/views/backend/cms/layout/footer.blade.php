<footer class="main-footer">
    <div class="float-right d-none d-sm-inline">

    </div>
    <strong>Copyright &copy; 2024 @if (date('Y') === '2024')
        @else
            - {{ date('Y') }}
        @endif <a href="{{ route('/') }}">{{ $title }}</a>.</strong> All
    rights reserved.
</footer>
