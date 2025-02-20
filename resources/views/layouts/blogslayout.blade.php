<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="">

@include('layouts.partials.header')

<body data-layout-mode="light" class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">


    <!-- leftbar-tab-menu -->
    @include('layouts.partials.navbar')


    @yield('route', View::make('layouts.partials.route_pages_blogs'))

    @yield('content')


    <!-- footer -->
    @include('layouts.partials.footer')

    {{--<script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/app.js"></script>--}}
</body>

</html>
