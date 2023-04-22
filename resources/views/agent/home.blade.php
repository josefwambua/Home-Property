<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("agent.css")
    <!-- plugins:css -->

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('agent.sidebar')
      <!-- partial -->
     <!-- partial:partials/_header.html -->
     @include('agent.header')
        <!-- partial -->
        @include('agent.main')
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('agent.script')
  </body>
</html>