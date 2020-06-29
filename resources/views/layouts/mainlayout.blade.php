<!DOCTYPE html>
<html lang="en">
 <head>

    @include('layouts.partials.head')

</head>
<body>


<header class="section-header">
    @include('layouts.partials.header')

    @include('layouts.partials.nav')
</header>


@yield('content')

@include('layouts.partials.footer')

{{-- @include('layouts.partials.footer-scripts') --}}
 </body>
</html>
