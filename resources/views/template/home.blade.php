<!DOCTYPE html>
<html lang="en">

@include('template.head')

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        @include('template.header')
        <aside class="left-sidebar">
            
            <div class="scroll-sidebar">
                
                @include('template.menu')
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">@yield('title')</h3>
                        </ol>
                    </div>
                </div>
                <div class="row">
                   @yield('content') 
                    
                </div>
                
            </div>
            <footer class="footer text-center">
                2019 <i class="fa fa-copyright" aria-hidden="true">Pekerja Anak Bangsa Indonesia</i>
            </footer>
        </div>
    </div>
    <script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin/assets/plugins/bootstrap/js/tether.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin/js/custom.min.js')}}"></script>
    <!-- Flot Charts JavaScript -->
    <script src="{{asset('admin/assets/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('admin/js/flot-data.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>
