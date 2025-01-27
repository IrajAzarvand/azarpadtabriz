<!DOCTYPE html>
<html lang="en" dir="rtl">

@include('layouts.dashboard_header')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('layouts.dashboard_navbar')


        @include('layouts.dashboard_sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="mb-2 row">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">{{ $Name }}  @if($Section) {{ '- '. $Section }}@endif</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    @yield('contents')

                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->


    </div>
    <!-- ./wrapper -->

    @include('layouts.dashboard_scripts')
</body>

</html>
