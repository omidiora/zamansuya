@if(session()->has('success'))
<div class="alert alert-success">
    <script>alert({{ session()->get('success')}}) </script>
</div>
@else

    @endif

<style>
.bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}
.pagination {
    margin-top: 20px;
}
footer {
    background: #343a40;
    padding: 40px;
}
footer a {
    color: #f8f9fa!important
}
</style>
@extends('layouts.header')
  <!-- Libraries CSS Files -->
  <link href="/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="icon" 
      type="image/png" href="img/a.jpg">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">Zaman -Suya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3">
                    <i class="fa fa-shopping-cart"></i> Cart
                    @if (Cart::instance('default')->count() > 0)
                <span class="badge badge-light">{{Cart::instance('default')->count()}}</span>
                    @endif
                </a>
            </form>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">ZAMAN Suya Cart</h1>
     </div>
</section>

<h1 class="text-center">Payment Method</h1>

@if(session()->has('success'))
<div class="alert alert-success">
{{session()->get('success')}}
</div>
@endif
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
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                        
                    </thead>
                    <tbody>
                    @foreach (Cart::content() as $item)
                        
                  
                        <tr>
                        <td><img src="{{$item->model->image}}"  class="img-fluid" style="width:100px"/> </td>
                        <td>{{$item->model->name}}</td>
                            <td>In stock</td>
                            <td><div class="input-group">
                                
                              </div></td>

                              
                            <td class="text-right">	&#8358;{{$item->model->price}}</td>
                            <form action="{{route('cart.delete',$item->rowId)}}" method="POST">
                                @csrf
                                @method('DELETE')
                            <td class="text-right"><button type="submit"><i class="fa fa-trash" style="color:red" ></i> </a></button> </td>
                        </form>
                        
                        </tr>
                       
                        @endforeach
                        <tr>
                            <td></td>
                        <td></td>
                            <td></td>
                            <td></td>
                            <td >Tax</td>
                        <td>&#8358;0</td>
                        
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
                    <a href="/suya" class="btn btn-danger btn-lg btn-block btn-success text-uppercase" >Continue Buying</a>
 
                </div>
                <div class="col-sm-12 col-md-6 text-right">
            <a href="{{route('checkout.index')}}" class="btn btn-lg btn-block btn-success text-uppercase">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
@else
<h3>No item in cart!</h3>
    
@endif

<!-- Footer -->

  <!-- Start Footer bottom Area -->
  <footer class="container-fluid">
    <div class="footer-area p-4" style="margin-top:100px;background:black;">
     
        <div class="row "style="color:white">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span></span style="color:white"><img src="img/a.jpg" alt="" class="img-fluid"></h2>
                </div>

                <p style="color:white"> WE are delighted to introduce you ZAMAN GLOBAL VENTURES trading as <strong>Zaman Suya</strong>
                  spot with outlet in Omole and allen Avenue ,Lagos. We serve the traditional tasty and hot Chicken,Beef , Liver, Lidney ,Goddard suya.
                ZAMAN Global ventures was incorporated in December 2017 and opened for business operations on the 16th January , 2018.</p>
                <div class="footer-icons">
                  <ul class="d-flex d-inline' style="color:white">
                    
                  
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4 style="color:white">information</h4>
                <p style="color:white">
                 Order for your suya online.Get delivered to you.
                </p>
                <div class="footer-contacts" style="color:white">
                  <p style="color:white"><span style="color:white">Tel:</span> 08163501640 , 08108764441</p>
                  <p style="color:white"><span style="color:white">Email:</span>info@zamansuya.com</p>

                  
                  <div class="d-inline ml-4"><a href="http://www.instagram.com/zamansuya" style="color:white"> <i class="fa fa-instagram" style="font-size:25px"></i></a></div>
                  <div class="d-inline ml-4"><a href="http://www.twitter.com/zamansuya" style="color:white"> <i class="fa fa-twitter" style="font-size:25px"></i></a></div>
                  <div class="d-inline ml-4"><a href="http://m.facebook.com/zamansuya" style="color:white"> <i class="fa fa-facebook" style="font-size:25px"></i></a></div>

                 
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4><b> <strong style="color:white"> Service</strong></b></h4>
                <div class="flicker-img">
                  <p style="color:white">Order Online . We deliver it to you</p>
                 
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>ZAMAN Global VENTURE</strong>. All Rights Reserved
              </p>
            </div>
            
    </div>
  </footer>



<style>
input,
textarea {
  border: 1px solid #eeeeee;
  box-sizing: border-box;
  margin: 0;
  outline: none;
  padding: 10px;
}

input[type="button"] {
  -webkit-appearance: button;
  cursor: pointer;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

.input-group {
  clear: both;
  margin: 15px 0;
  position: relative;
}

.input-group input[type='button'] {
  background-color: #eeeeee;
  min-width: 38px;
  width: auto;
  transition: all 300ms ease;
}

.input-group .button-minus,
.input-group .button-plus {
  font-weight: bold;
  height: 38px;
  padding: 0;
  width: 38px;
  position: relative;
}

.input-group .quantity-field {
  position: relative;
  height: 38px;
  left: -6px;
  text-align: center;
  width: 62px;
  display: inline-block;
  font-size: 13px;
  margin: 0 0 5px;
  resize: vertical;
}

.button-plus {
  left: -13px;
}

input[type="number"] {
  -moz-appearance: textfield;
  -webkit-appearance: none;
}

</style>
<script>
function incrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal)) {
    parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

function decrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal) && currentVal > 0) {
    parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

$('.input-group').on('click', '.button-plus', function(e) {
  incrementValue(e);
});

$('.input-group').on('click', '.button-minus', function(e) {
  decrementValue(e);
});
</script>