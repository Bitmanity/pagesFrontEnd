<!DOCTYPE html>
<html>
  <head>
    @include('includes.stylesheet')
  </head>
  <body class="fixed-header">
    <!-- BEGIN SIDEBAR -->
        <!-- BEGIN SIDEBPANEL-->
    @include('includes.sidebar')

    <!-- END SIDEBAR -->
    <!-- END SIDEBAR -->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
      <!-- START PAGE HEADER WRAPPER -->
      <!-- START HEADER -->
      @include('includes.header')
      <!-- END HEADER -->
      <!-- END PAGE HEADER WRAPPER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
        <div class="content">
          <!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
              <div class="inner">
                <!-- START BREADCRUMB -->
                 <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Barebone</a></li>
                  <li class="breadcrumb-item active">Layout</li>
                </ol>
                <!-- END BREADCRUMB --> 
              </div>
            </div>
          </div>
          <!-- END JUMBOTRON -->
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->
            <!-- END PLACE PAGE CONTENT HERE -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START FOOTER -->
        @include('includes.footer')
        <!-- END FOOTER -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!--START QUICKVIEW -->
    @include('includes.quickview')
    <!-- END QUICKVIEW-->
    <!-- START OVERLAY -->
    @include('includes.overlay')
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
     @include('includes.script')
  </body>
</html>