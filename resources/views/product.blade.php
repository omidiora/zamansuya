<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/home.css">
  <!-- Libraries CSS Files -->
  <link href="/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="icon" 
      type="image/png" href="img/a.jpg">

</head>

<body data-spy="scroll" data-target="#navbar-example">

  

  <header>
    <!-- header-area start -->
    
            <!-- Navigation -->
            <div class="container ">
            <nav class="navbar navbar-expand-lg ">
              <a class="navbar-brand" href="/"><img src="img/a.jpg"  class="img-fluid" alt="" style="width:150px"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about">About us</a>
                  </li>
                </ul>
              </div>
            </nav>
        </div>
    <!-- header-area end -->
  </header>
  <style>

  </style>
  <!-- header end -->


      <div class="container mt-4">
                      <h4 class="h1 heading-title text-center" >Buy your Suya. </h4>
                      <p class="heading-text text-center">
                      </p>
                  </div>
              </div>
          </div>
      </div>
    </div>


   @if ($zaman->count()>0)
  <div class="container" id="order">
<div class="card-deck">
  @foreach ($zaman as $zam)
  <div class="col-md-4">
  <div class="card"  style="width:300px">
  <img src="{{$zam->image}}" class="card-img-top" alt">
    <div class="card-body">
    <h5 class="card-title">{{$zam->name}}</h5>
    <p class="card-text">&#8358;{{$zam->price}}</p>
    </div>
    <div class="card-footer">
    <small class="text-muted"><a href="{{route('product.show',$zam->slug)}}" class=" btn btn-danger">View suya</a></small>
    </div>
  </div>
  </div>
<br>
  @endforeach
  <br>
</div>
@else
  <p class="text-center display-2">NO Suya ..Check back in 10 Minutes. Thanks</p>     
@endif


</div>

@extends('layouts.footer')
</body>
</html>


