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


{{--

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">

            @include('PageElements.dashboard.Shared.TopBar')

        </header>
        @include('PageElements.dashboard.Shared.Menus')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>

                    {{ $Name }}
                    <small>{{ $Section }}</small>
                </h1>

            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->

                @if (Auth::user()->role_id == 1)
                    @include('PageElements.dashboard.Shared.StatBoxes')
                @endif

                <!-- Main Contents -->
                @yield('contents')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="text-left main-footer">
            <strong>CopyRight &copy; 2020-2021 <a>Iraj Azarvand</a> </strong>
        </footer>

    </div>
    <!-- ./wrapper -->

    @include('PageElements.dashboard.Shared.Js')


</body>

</html> --}}
