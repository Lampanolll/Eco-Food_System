<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      @include('admin.sidebar')
      @include('admin.navbar')
      
      <div class="container-fluid page-body-wrapper">
        {{$data->companyname}}
        {{$data->managername}}
        {{$data->email}}
        {{$data->number}}
        {{$data->address}}
        {{$data->image}}
        {{$data->password}}

      </div>
      
        
    @include('admin.script')
  </body>
</html>