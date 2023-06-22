@includeIf('layouts.partials.header')

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
                stroke="#fec80e" stroke-width="2"></path>
            <path
                d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
                stroke="#fec80e" stroke-width="2"></path>
            <path id="teabag" fill="#fec80e" fill-rule="evenodd" clip-rule="evenodd"
                d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z">
            </path>
            <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" stroke="#fec80e"></path>
            <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#fec80e"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
           @includeIf('layouts.partials.navbar')
        </header>
        <!-- ============================================================= -->
        <!-- End Topbar header -->
        <!-- ============================================================= -->
        <!-- ============================================================= -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================= -->
        @includeIf('layouts.partials.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================= -->
    <!-- customizer Panel -->
    <!-- ============================================================= -->
   @includeIf('layouts.partials.theme')
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script
        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/libs/jquery/dist/jquery.min.js">
    </script>


    <!-- Bootstrap tether Core JavaScript -->
    <script
        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js">
    </script>
    <!-- apps -->
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/js/app.min.js">
    </script>
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/js/app.init.js">
    </script>
    <script
        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/js/app-style-switcher.js">
    </script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script
        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.js">
    </script>
    <script
        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/libs/jquery-sparkline/jquery.sparkline.min.js">
    </script>
    <!--Wave Effects -->
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/js/waves.js">
    </script>
    <!--Menu sidebar -->
    <script
        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/js/sidebarmenu.js">
    </script>
    <!--Custom JavaScript -->
    <script
        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/js/feather.min.js">
    </script>
    <script
        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/js/custom.min.js">
    </script>
    <!--This page JavaScript -->

    <script
src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/libs/apexcharts/dist/apexcharts.min.js">
</script>
<!-- Chart JS -->
<script
src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/js/pages/dashboards/dashboard1.js">
</script>

<script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/libs/apexcharts/dist/apexcharts.min.js"></script>

<script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/libs/c3/htdocs/js/d3-3.5.6.js"></script>
<script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/libs/c3/htdocs/js/c3-0.4.9.min.js"></script>

<script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/js/pages/c3-chart/bar-pie/c3-donut.js"></script>
    @yield('script')
</body>

</html>
