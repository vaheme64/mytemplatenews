<!DOCTYPE html>
<html>
  <head>
      @include('panel.layout_panel.header')
      @yield('extra-header')
  </head>
  <body class="fixed-header dashboard menu-pin menu-behind">

    <!-- BEGIN SIDEBPANEL-->
    @include('panel.layout_panel.sidebar')
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
        <!-- START HEADER -->
        @include('panel.layout_panel.topmenu')
        <!-- END HEADER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper ">
          <!-- START PAGE CONTENT -->
          @yield('content')
          <!-- END PAGE CONTENT -->
          <!-- START COPYRIGHT -->
          <!-- START CONTAINER FLUID -->
          <!-- START CONTAINER FLUID -->
          @include('panel.layout_panel.copyright')
          <!-- END COPYRIGHT -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
      </div>
      <!-- END PAGE CONTAINER -->
      <!--START QUICKVIEW -->
      @include('panel.layout_panel.right-quickview')
      <!-- END QUICKVIEW-->
      <!-- START OVERLAY -->
      @include('panel.layout_panel.searchbar')
      <!-- END OVERLAY -->
      @include('panel.layout_panel.footer')
      @yield('extra-footer')
    </body>
  </html>

