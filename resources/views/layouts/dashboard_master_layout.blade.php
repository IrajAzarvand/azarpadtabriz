<!DOCTYPE html>
<html lang="en" dir="rtl">

@include('layouts.dashboard_header')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('layouts.dashboard_navbar')


        @include('layouts.dashboard_sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('contents')
        <!-- /.content-wrapper -->



    </div>
    <!-- ./wrapper -->

    @include('layouts.dashboard_scripts')
</body>

</html>
