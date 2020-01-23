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
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
          </li>
          <li class="nav-item">
            <a class="nav-link ml-4" href="/contact" style="font-size:30px;color:brown;">Contact us</a>
          </li>
          
        </ul>
      </div>
    </nav>



    <!--flutter payment-->
    <h1 class="text-center">Pay online for your Suya</h1>

    <form>
        <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
        <button type="button" onClick="payWithRave()">Pay Now</button>
    </form>    
  <script>
      const API_publicKey = "FLWPUBK_TEST-8ef433f40ea5fe65025839a85f1de47e-X";
  
      function payWithRave() {
          var x = getpaidSetu p({
              PBFPubKey: "FLWPUBK_TEST-8ef433f40ea5fe65025839a85f1de47e-X",
              customer_email: "{{Auth::user()->email}}",
              amount:" {{Cart::total()}} " ,
              customer_phone: "{{Auth::user()->phone}}",
              currency: "NGN",
              txref: "rave-123456",
              meta: [{
                  metaname: "flightID",
                  metavalue: "AP1234"
              }],
              onclose: function() {},
              callback: function(response) {
                  var txref = response.tx.txRef; // collect txRef returned and pass to a 					server page to complete status check.
                  console.log("This is the response returned after a charge", response);
                  if (
                      response.tx.chargeResponseCode == "00" ||
                      response.tx.chargeResponseCode == "0"
                  ) {
                      // redirect to a success page
                    window.location='/payment-successfully';
                  } else {
                      // redirect to a failure page.
                  }
  
                  x.close(); // use this to close the modal immediately after payment.
              }
          });
      }
  </script>