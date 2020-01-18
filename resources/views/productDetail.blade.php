<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zamansuya</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">

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
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <div class="container-fluid">
              <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="#"><img src="img/a.jpg"  class="img-fluid" alt="" style="width:150px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="/" style="font-size:30px;color:brown;">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link ml-2" href="{{route('suya')}}"  style="font-size:30px;color:brown;">Buy your Suya <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/about" style="font-size:30px;color:brown;">About us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#contact" style="font-size:30px;color:brown;">Contact us</a>
                    </li>
                    
                  </ul>
                </div>
              </nav>
          </div>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <style>
  

@import url('https://fonts.googleapis.com/css?family=PT+Sans');
.btn {
  display: inline-block;
  background: transparent;
  text-transform: uppercase;
  font-weight: 500;
  font-style: normal;
  font-size: 0.825rem;
  letter-spacing: 0.3em;
  color: white !important;
  border-radius: 0;
  padding: 18px 80px 20px;
  transition: all 0.7s ease-out;
  background-image: linear-gradient(to right, #2b5876 0%, #4e4376 51%, #2b5876 100%);

  background-position: 1% 50%;
  background-size: 300% 300%;
  text-decoration: none;
  margin: 0.625rem;
  border: none;
  border: 1px solid rgba(223,190,106,0.3);
}

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
          <button class="btn btn-primary">Add to cart</button>
          <form action="/cart">
      </form>
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











<!-------ORDER METHOD----------------->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <!-- Contact Form JavaScript File -->

</body>

</html>
