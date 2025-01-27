<!-- Navbar -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu float-right">
        <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
                <a href="#" aria-expanded="true">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div >
                            <button class="btn btn-danger" type="submit">خروج</button>
                        </div>
                    </form>
                </a>

        </ul>
    </div>
</nav>
<!-- /.navbar -->
