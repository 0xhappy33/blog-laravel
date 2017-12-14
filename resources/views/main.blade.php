<!doctype html>
<html lang="en">
<head>
    {{--include head from partials folder--}}
    @include('partials._head')
</head>
<body>
    {{--include navbar from partials folder--}}
    @include('partials._nav')

    <div class="container">
        @include('partials._messages')

        @yield('content')

        {{--include footer from partials folder--}}
        @include('partials._footer')
    </div>

    {{--include javascript file from partials folder--}}
    @include('partials._javascript')

    @yield('script')
</body>
</html>