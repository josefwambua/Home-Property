<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("agent.css")
    <!-- plugins:css -->

    <style type="text/css">
    body {
        background-color: blue;
    }
    .font_size {
        font-size: 40px;  
        padding-bottom: 10px;
        font-family: "Times New Roman", Times, serif;
        
    }
    .text_color {
        color: black;
        padding-bottom: 20px;

    }
.align_center {
    text-align: center;
    padding-top: 20px;
    font-weight: bold;
    text-decoration: underline;
    text-decoration-color: green;
    font-family: "Times New Roman", Times, serif;
}
label{
    display: inline-block;
    width: 100%;
}
.div_design{
    padding-bottom: 15px;
}
</style>


  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('agent.sidebar')
      <!-- partial -->
     <!-- partial:partials/_header.html -->
     @include('agent.header')
        <!-- partial -->
       
<div class="main-panel">
          <div class="content-wrapper">
          @if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
    {{session()->get('message')}}
    
</div>
      
      @endif
    <div class="container">
        <div class="align_center">
        <h2 class="font_size">House Units</h2>        
        <hr>
        
        <form action="{{url('/add_houseunits')}}" method="POST">
        @csrf
        <div class="div_design">
    <label>Size</label>
    <input class="text_color" type="text" name="size" placeholder="Input size" required="">
  </div>
  
  <div class="div_design">
    <label>Property</label>
    <select class="text_color" name="name" required="">
    @foreach ($properties as $properties)
          <option value="{{$properties->name}}">{{$properties->name}}</option>
      @endforeach)
 </select>    
  </div>
  <div class="div_design">   
    <label>Rent</label>
    <input class="text_color" type="number" name="Rent" placeholder="Input rent" required="">
  </div>
  
  <div class="div_design">
    <label>Deposit</label>
    <input class="text_color" type="number" name="Deposit" placeholder="Input Deposit" required="">
  </div>
  
  <div class="div_design">
    <input type="submit" class="btn btn-primary" name="Add House Units" value="Add House Units" required="">
  </div>
</form>

      
</div>
</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
@include('agent.script')
  </body>
</html>