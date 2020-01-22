<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zamansuya</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/home.css">
  <!-- Libraries CSS Files -->
  <link href="/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="icon" 
      type="image/png" href="img/a.jpg">

</head>

<p class="text-center">Order by  </span>
<div class="container-fluid">

    <div class="container" style="margin-top:50px">
    <h2 class="text-center alert alert-primary">Order Detail</h2>
    
    @if (Cart::count()>0)
 <table class="table table-striped">
  @foreach (Cart::content() as $item)
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Delivery</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>{{$item->model->name}}</td>
      <td>{{$item->model->price}}</td>
      <td>Free</td>
    <td><b> {{cart::total()}}</b></td>
    
    </tr>
    
@endforeach

@endif



    </div>

    <p>{{ $msg }} just Order from Zamansuya a <b> {{$item->model->name}} </b></p>
   <p> Customer Telephone:   {{ $phone}}</p>
 
