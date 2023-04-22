<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("agent.css")
    <!-- plugins:css -->
        <style type="text/css">
            .div_center{
                text-align: center;
                padding-top: 30px;
                font-size: 30px;
            }
    .form-group {
        margin-bottom: 20px;
    }
    
    label {
        font-weight: bold;
    }
    
    .white-input {
        background-color: #fff;
        color: #000;
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
        
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('agent.script')
<div class="main-panel">
          <div class="content-wrapper">
      @if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
    {{session()->get('message')}}

</div>
      
      @endif
    <h1 class="div_center">Add Property</h1>
    <form action="{{url('/add_property')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control white-input" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="owner">Owner</label>
        <input type="text" class="form-control white-input" id="owner" name="owner" required>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control white-input" id="address" name="address" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control white-input" id="description" name="description" required>
    </div>
    <input type="submit" class="btn btn-primary" name="Add Property" value="Add Property"</input>
</form>

<h1 class="div_center">View Property</h1>
    <form action="{{url('/view_property')}}" method="POST">
<table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Owner</th>
                    <th>Address</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
            
                @foreach ($data as $data)
            <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->owner}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->description}}</td>
                    <td> <a onclick="return confirm('Are you sure you want to delete')" class="btn btn-danger" href="{{url('delete_property',$data->id)}}">Delete</a><td/>
                </tr>
                @endforeach
            </td>
            
        </table>
    </div>
            </div>
        </div>
  </body>
</html>