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
<body>
  
    <div class="container col-md-6 mt-4">
        <h5>Zamansuya Admin Page</h5>
        <div style="margin-top:50px"></div>
    <form method="POST" action="{{route('adminzaman.store')}}" enctype="multipart/form-data">
    @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Name of the Suya</label>
              <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name of the Suya">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Price of the Suya</label>
                <input type="text" name="price" class="form-control" id="" placeholder="Price of the Suya">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Image of the Suya</label>
                <input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="Image of the Suya">
              </div>
            
              <div class="form-group">
                  <button class="btn btn-lg">Uploads</button>
              </div>
          </form>
    </div>






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
