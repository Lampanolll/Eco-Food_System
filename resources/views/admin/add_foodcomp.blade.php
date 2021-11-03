<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
      label
      {
        display: inline-block;

        width: 200px;
      }
    </style>

    @include('admin.css')
  </head>

  <body>
    <div class="container-scroller">
      
      @include('admin.sidebar')
      @include('admin.navbar')
      
      <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style="padding-top: 100px;">

          @if (session()->has('message'))

        <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert">
            x
          </button>

          {{session()->get('message')}}

        </div>
          
        @endif

          <form action="{{url('upload_foodcomp')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div style="padding: 15px;">
              <label>FoodWaste Company</label>
              <input type="text" style="color:black" name="companyname" placeholder="Write Company Name" required="">
            </div>

            <div style="padding: 15px;">
              <label>Manager Name</label>
              <input type="text" style="color:black" name="managername" placeholder="Write Manager Name" required="">
            </div>

            <div style="padding: 15px;">
              <label>Company Email</label>
              <input type="text" style="color:black" name="email" placeholder="Write Company Email" required="">
            </div>

            <div style="padding: 15px;">
              <label>Contact Number</label>
              <input type="number" style="color:black" name="number" placeholder="Write Contact Number" required="">
            </div>

            <div style="padding: 15px;">
              <label>Company Address</label>
              <input type="text" style="color:black" name="address" placeholder="Write Company Address" required="">
            </div>

            <div style="padding: 15px;">
              <label>Company Image</label>
              <input type="file" name="companyimage" required="">
            </div>

            <div style="padding: 15px;">
              <label>Description</label>
              <input type="text" style="color:black" name="password" placeholder="Write Company Description" required="">
            </div>

            <div style="padding: 15px;">
              <input type="submit" class="btn btn-success">
            </div>
            
          </form>

        </div>
        
      </div>

    @include('admin.script')

  </body>

</html>