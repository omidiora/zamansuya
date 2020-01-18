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

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg ">
      <a class="navbar-brand" href="/"><img src="img/a.jpg"  class="img-fluid" alt="" style="width:150px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
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


  <div class="cont"  style="width:100%">
    <img src=/img/c.jpg alt="" class="img-fluid">
  <div class="centered"><h1 class="display-2" style="color:yellow" ></h1>
	</div>
</div>
  </div>
 </div>


      <div class="container m" style="margin-top:100px" >
                      <h4 style=""  class="display-2" >Buy your Suya.</h4>
                      <p class="heading-text text-center">
                      </p>
                  </div>
              </div>
          </div>
      </div>
    </div>

      <!-------ORDER METHOD----------------->
<div class="container-fluid  " style="margin-top:40px;">
  <div class="order">
      <div class="row d-flex justify-content-center ml-2">
  <div class="col-md-6 border "   >
  <h1 id="font" class="tet-center"><h4>Order Online </h4></h1>
  <img src="img/d.jpg" alt="" class="img-fluid">
  
  </div>
  <div class="col-md-4  border   " style="background:brown">
    <p class="display-2 text-center d-flex justify-content-center"  style="color:white;margin-top:100px;font-size:40px" id="font011"> ORDER FOR YOUR SUYA</p>
    <div class="row">

    <a href="{{route('suya')}}"  id="btn" class="btn btn-lg btn-primary " style="margin-left:150px"> Order Now</a>
  </div>
    </div>  </div>
  </div>
</div>
<style>
.border{
  -webkit-border-radius: 12px;
-moz-border-radius: 12px;
border-radius: 12px;
color:red;F
outline: 24px solid #3D0A0C;
outline-offset: 0px;

}

</style>










  <!-- Start About area -->
  <div id="about" class="about-area area-padding" style="margin-top:100px">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4" >
    <div class="row">
      <div class="col-md-6">
        <img src="img/a.jpg" alt="" class="img-fluid">
      
      </div>
      <div class="col-md-6">
        <p>
          WE are delighted to introduce you ZAMAN GLOBAL VENTURES trading as <strong>Zaman Suya</strong>
          spot with outlet in Omole and allen Avenue ,Lagos. We serve the traditional tasty and hot Chicken,Beef , Liver, Lidney ,Goddard suya.
        ZAMAN Global ventures was incorporated in December 2017 and opened for business operations on the 16th January , 2018.
        Our mission is to be the suya spot of choice , for lovers of traditional tasty suya by providing quality suya spot of choice , for lovers of 
        traditional tasty suya,by providing suya options under clean adn hugenic environment. While focusing on satisfying an efficient customer service.
        </p>
      </div>
    </div>
  </div>



  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

          <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
         
  <!-- End pricing table area -->
  <!-- Start Testimonials -->
  <!-- End Suscrive Area -->
  <!-- Start contact Area -->
  
          <!-- Start  contact -->
        @if ($errors->count()>0)
        @foreach ($errors as $error)
        <p class="alert alert-danger">
          {{$error}}

          
        </p>
            
        @endforeach
            
        @endif
          <div class="col-md-6 offset-md-2 col-sm-6 col-xs-12" style="margin-top:50px" id="contact">
            @if (count($errors)>0)
            <ul class="list-group">
            @foreach ($errors->all() as $error)
        
            <li class="list-group-item text-danger">{{$error}}</li>
                
            @endforeach
            </ul>
                
            @endif
            <h1></h1>
            <div class="form contact-form">
              <div id="errormessage"></div>
           
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
  <!-- End Contact Area -->

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

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <!-- Contact Form JavaScript File -->

</body>

</html>
