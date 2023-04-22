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
    <h1 class="div_center">Register Tenant</h1>
    <form action="{{url('/register_tenant')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control white-input" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="owner">Email</label>
        <input type="text" class="form-control white-input" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="address">Phone</label>
        <input type="text" class="form-control white-input" id="phone" name="phone" required>
    </div>
    <div class="form-group">
        <label for="description">National_id</label>
        <input type="text" class="form-control white-input" id="national_id" name="national_id" required>
    </div>
    <div><input type="submit" class="btn btn-primary" name="Add Property" value="Register Tenant"</input></div>
</form>

<h1 class="div_center">Registered Tenants</h1>
    <form action="{{url('/')}}" method="POST">
        @csrf
<table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>National id</th>
                    <th>Action</th>
                </tr>
                </thead>
                @foreach ($data as $data)
            <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->national_id}}</td>
                    <td> <a onclick="return confirm('Are you sure you want to delete')" class="btn btn-danger" href="{{url('delete_tenant',$data->id)}}">Delete</a><td/>
                </tr>
                @endforeach
            </td>
       
          
            </td>
            
        </table>
    </div>
            </div>
        </div>
  </body>
</html>