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

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg ">
      <a class="navbar-brand" href="/"><img src="img/a.jpg"  class="img-fluid" alt="" style="width:150px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" id="span"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link mr-4" href="/" style="font-size:30px;color:brown;">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link ml-4" href="{{route('suya')}}"  style="font-size:30px;color:brown;">Buy your Suya <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link ml-4" href="/about" style="font-size:30px;color:brown;">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ml-4" href="/contact" style="font-size:30px;color:brown;">Contact us</a>
          </li>
          
        </ul>
      </div>
    </nav>
</div>

  <!-- Libraries CSS Files -->
  <link href="/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/home.css">

</head>

<body data-spy="scroll" data-target="#navbar-example">

  

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <style>
  .con{
  position: relative;
  text-align: center;
  color: white;
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

/* Top right text */
.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

/* Bottom right text */
.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

@import url('https://fonts.googleapis.com/css?family=PT+Sans');

.btn:hover {
  color: #fff;
  border: 1px solid rgba(223,190,106,0);
  color: white;
  background-position: right center;
}


article {
  height: 100vh;
}

  </style>
  <!-- header end -->

 
 <div class="container" style="margin-top:100px">
   <p style="font-size:30px;text-align:center">Place Your Order</p>


   @if ($errors->count()>0)
@foreach ($errors as $error)
<p class="alert alert-danger">
  {{$error}}

  
</p>
    
@endforeach
@endif
 <form method="POST" action="{{route('payment')}}">
  @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control form-control-lg" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

      <div class="form-group">
      <label for="exampleInputEmail1">Address</label>
      <input type="text" class="form-control form-control-lg" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correct Addresss">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Phone </label>
      <input type="text" name="phone" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone">
    </div>
    <div class="col-sm-12 col-md-6 text-right">
    </div>

    <div class="checkbox">
      <label><input type="checkbox" value="1">Cash On Delivery</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="2">Pos on Delivery</label>
    </div>

 </div>
 
 @if (Cart::count()>0)
 <table class="table table-striped">
  @foreach (Cart::content() as $item)
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>{{$item->model->name}}</td>
      <td>{{$item->model->price}}</td>
      <td>  <button type="submit" class="btn btn-danger">PLACE YOUR ORDER </a></button>
      </td>
      {{-- <form action="{{route('cart.delete',$item->rowId)}}" method="POST">
        @csrf
        @method('DELETE')
    <td class="text-right"><button type="submit" class=" btn-danger"> delete</a></button> </td>

      </form> --}}

    </tr>
  </tbody>
</form>
 @endforeach
</table>
    
@endif


 