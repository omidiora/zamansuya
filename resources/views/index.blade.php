<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zamansuya</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ml-4" href="#">Zamansuya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="null" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="navbar-nav ">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="#">Contact us<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="#">About us<span class="sr-only">(current)</span></a>
           
          </div>
        </div>
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/images/a.jpg" alt="First slide" style="height:500px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/d.jpg" alt="Second slide" style="height:500px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/b.jpg" alt="Third slide" style="height:500px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
       
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="container mt-4">
                      <h4 class="h1 heading-title text-center">Zaman Global Ventures </h4>
                      <p class="heading-text text-center">Buy your Suya, meat.
                      </p>
                  </div>
              </div>
          </div>
      </div>
     @if ($zaman->count()>0)
    
  <div class="container">
    <div class="card-deck">
      @foreach ($zaman as $zam)
          
     
        <div class="card">
        <img src="{{$zam->image}}" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">	&#8358;{{$zam->price}}</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><div class="btn btn-primary">Add to Cart</div></small>
          </div>
        </div>
        
      @endforeach
    </div>
      @else
         
      @endif
    
  </div>


    
    <div class="container  mt-4">
        <div class="row">
        <div class="col-md-6">
        <h1>Order Online</h1>
        <p>Select your favourite suya. provide your address.pay online or cash on Delivery </p>
        <a href="{{route('suya')}}" class="btn btn-lg btn-primary"> Order Now</a>
        </div>
        <div class="col-md-6">
            <h1>Order By Phone</h1>
            <p>Phone: 08163501640 , 08108764441 </p>
            <button class="btn btn-lg btn-primary">Order by Phone </button>
    
        
        </div>
        </div>
    </div>
<div class="background " style="margin-top:100px!important">
<div class="container">
    <div class="row">
    <div class="col-md-6">
<div>
    <h3>Contact Us</h3>

<p>Please use this form to submit your feeback. You can also contact us by sending an email to us</p>
<p>E-mail us : <a href="mailto:info@zamansuya.com">info@zamansuya.com</a></p>
<p>We look forward to receving your message.</p>
</div>
</div>
<div class="col-md-6">
    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
          
            <input type="text" class="form-control" id="inputEmail4" placeholder="Name">
          </div>
          <div class="form-group col-md-6">
         
            <input type="Email" class="form-control" id="inputPassword4" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          
          <input type="text" class="form-control" id="inputAddress" placeholder="Phone">
        </div>
        <div class="form-group">
        <textarea name="" id="" cols="70" rows="10" placeholder="Your Message*"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>



