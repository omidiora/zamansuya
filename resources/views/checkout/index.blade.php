@extends('layouts.header')
  <!-- Favicons -->
  <link href="img/a.jpg" rel="icon">
  <link href="img/a.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
              </div>
            </nav>
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
   <p style="font-size:30px;text-align:center">Contact Details</p>
  <form>

    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="tet" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Phone </label>
      <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone">
    </div>

   

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 </div>

 @if (Cart::count()>0)
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center"></th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                        
                    </thead>
                    <tbody>
                    @foreach (Cart::content() as $item)
                        
                  
                        <tr>
                            <td><img src="{{$item->model->image}}" style="width:50px" /> </td>
                        <td><h1>{{$item->model->name}}<h1></td>
                            <td><h1>Available</h1></td>
                            
                            <td class="text-right"><h1>	&#8358;{{$item->model->price}}</h1></td>
                            <form action="{{route('cart.delete',$item->rowId)}}" method="POST">
                                @csrf
                                @method('DELETE')
                            <td class="text-right"><button type="submit"><i class="fa fa-trash"></i> </a></button> </td>
                        </form>
                        
                        </tr>
                        
                        @endforeach
                        <tr>
                          <td></td>
                      <td></td>
                          <td></td>
                          <td></td>
                          <td >Tax</td>
                      <td>&#8358;{{Cart::setGlobalTax(0)}}</td>
                      
                      </tr>
                         <tr>
                          <td></td>
                      <td></td>
                          <td></td>
                          <td></td>
                          <td >Total:</td>
                      <td>&#8358;{{Cart::total()}}</td>
                      
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                  
                </div>
                <div class="col-sm-12 col-md-6 text-right">
            <a href="" class="btn btn-lg btn-block btn-success text-uppercase">Pay</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
@else
<h3>No item in cart!</h3>
    
@endif


 