<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.includes.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin.includes.sidebar')
      <!-- partial -->
     
        <!-- partial:partials/_navbar.html -->
        @include('admin.includes.navbar')
        <!-- partial -->

        @include('admin.includes.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.includes.script')
    <!-- End custom js for this page -->
  </body>
</html>