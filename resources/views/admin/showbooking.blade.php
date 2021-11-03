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

          <div align="center" style="padding-top:70px;">

            <table>
                <tr style="background-color: grey;">
                    <th style="padding:10px; font-size: 20px; color:black;">Name</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Email</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Restaurant Name</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Contact No.</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Address</th>
                    <th style="padding:10px; font-size: 20px; color:black;">District</th>
                    <th style="padding:10px; font-size: 20px; color:black;">City</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Type of Foodwaste</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Date</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Foodwaste Company</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Message</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Status</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Approve Request</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Cancel Request</th>
                </tr>
        
                @foreach ( $data as $request )
                  
                <tr style="background-color: grey;" align="center">
                    <td style="padding:10px; font-size: 20px; color:black;">{{$request->name}}</td>
                    <td style="padding:10px; font-size: 20px; color:black;">{{$request->email}}</td>
                    <td style="padding:10px; font-size: 20px; color:black;">{{$request->restaurantname}}</td>
                    <td style="padding:10px; font-size: 20px; color:black;">{{$request->contact}}</td>
                    <td style="padding:10px; font-size: 20px; color:black;">{{$request->address}}</td>
                    <td style="padding:10px; font-size: 20px; color:black;">{{$request->district}}</td>
                    <td style="padding:10px; font-size: 20px; color:black;">{{$request->city}}</td>
                    <td style="padding:10px; font-size: 20px; color:black;">{{$request->foodtype}}</td>
                    <td style="padding:10px; font-size: 20px; color:black;">{{$request->date}}</td>
                    <td style="padding:10px; font-size: 20px; color:black;">{{$request->foodcomp}}</td>
                    <td style="padding:10px; font-size: 20px; color:black;">{{$request->message}}</td>
                    <td style="padding:10px; font-size: 20px; color:black;">{{$request->status}}</td>
                    <td><a class="bt btn-success" href="{{url('approve_request',$request->id)}}">Approved</a></td>
                    <td><a class="bt btn-danger" onclick="return confirm('Do you want to cancel request?')"href="{{url('canceled_request',$request->id)}}">Cancel</a></td>

                </tr>
        
                @endforeach
        
            </table>
        
          </div>
        
        </div>
        
      @include('admin.script')
  
  </body>

</html>