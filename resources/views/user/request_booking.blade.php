<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Eco Food Cycle</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Eco-Food-Cycle</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
           

            @if (Route::has('login'))
            @auth
            
            <li class="nav-item">
              <a class="nav-link" style="background-color:green; color: white" href="{{url('requestbooking')}}">Pick-up Request</a>
            </li>

            <x-app-layout>
            </x-app-layout>
                
            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth
                
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div align="center" style="padding:70px;">

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

            <th style="padding:10px; font-size: 20px; color:black;">Cancel Request</th>
        </tr>

        @foreach ( $book as $books )
          
        <tr style="background-color: grey;" align="center">
            <td style="padding:10px; font-size: 20px; color:black;">{{$books->name}}</td>
            <td style="padding:10px; font-size: 20px; color:black;">{{$books->email}}</td>
            <td style="padding:10px; font-size: 20px; color:black;">{{$books->restaurantname}}</td>
            <td style="padding:10px; font-size: 20px; color:black;">{{$books->contact}}</td>
            <td style="padding:10px; font-size: 20px; color:black;">{{$books->address}}</td>
            <td style="padding:10px; font-size: 20px; color:black;">{{$books->district}}</td>
            <td style="padding:10px; font-size: 20px; color:black;">{{$books->city}}</td>
            <td style="padding:10px; font-size: 20px; color:black;">{{$books->foodtype}}</td>
            <td style="padding:10px; font-size: 20px; color:black;">{{$books->date}}</td>
            <td style="padding:10px; font-size: 20px; color:black;">{{$books->foodcomp}}</td>
            <td style="padding:10px; font-size: 20px; color:black;">{{$books->message}}</td>
            <td style="padding:10px; font-size: 20px; color:black;">{{$books->status}}</td>

            <td><a class="bt btn-danger" onclick="return confirm('Do you want to cancel request?')"href="{{url('cancel_request',$books->id)}}">Cancel</a></td>
        </tr>

        @endforeach

    </table>

  </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>