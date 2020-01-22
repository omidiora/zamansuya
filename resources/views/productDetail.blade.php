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

  <link rel="stylesheet" href="/css/home.css">
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


 <!-----------Buy your suya spot-------------->

 <div class="container s" style="margin-top:100px">
  <h5 class="text-center " >Suya Spot</h5>
 <div class="card-deck " style="margin-top:100px" id="order">
     <div class="card">
     <img src="{{$productdetail->image}}" class="card-img-top" alt="" style="height:500px;background-size:cover">
       <div class="card-body">
       <h5 class="card-title">	&#8358;{{$productdetail->price}}</h5>
       <p class="card-text">{{$productdetail->name}}</p>
       </div>
       <div class="card-footer">
       <form action="{{route('cart')}}" method="POST">
         @csrf
         <input type="hidden" name="id" value="{{$productdetail->id}}">
         <input type="hidden" name="name" value="{{$productdetail->name}}">
         <input type="hidden" name="price" value="{{$productdetail->price}}">
         <button class="btn btn-primary" type="submit" >Add to cart</button>
       
       </div>
     </div>
 </div>
 
</div>





  

  <!-- Start Footer bottom Area -->
  <footer class="container-fluid">
    <div class="footer-area p-4" style="margin-top:100px;background:black;">
     
        <div class="row "style="color:white">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span></span style="color:white"><img src="img/f.jpg" alt="" class="img-fluid"></h2>
                </div>

                <p style="color:white"> We are delighted to introduce you ZAMAN GLOBAL VENTURES trading as <strong>Zaman Suya</strong>
                  spot with outlet in Omole and allen Avenue ,Lagos.</p>
                <div class="footer-icons">
                  <ul class="d-flex d-inline" style="color:white">
                    
                  
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4 style="color:brown">information</h4>
                <p style="color:brown">
                 Order for your suya online.Get delivered to you.
                </p>
                <div class="footer-contacts" style="color:white">
                  <p style="color:white"><span style="color:white">146,Obafemi Awolowo Ikeja,Lagos </p>
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
                <h4><b> <strong style="color:brown"> Service</strong></b></h4>
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

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <!-- Contact Form JavaScript File -->

</body>

</html>
