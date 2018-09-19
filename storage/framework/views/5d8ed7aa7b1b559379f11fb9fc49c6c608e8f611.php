<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/home.css')); ?>">

    <title>Mode Quality Services</title>

  </head>
  <body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light md-nav">

        <a class="navbar-brand" href="#">
          <img src="<?php echo e(asset('public/images/logos/home_logo.jpg')); ?>" width="30" height="30" alt="">
        </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

        <ul class="navbar-nav justify-content-end">

          <li class="nav-item active">
            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>


        </ul>

      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">


        <div class="col-sm-12">

          <div class="intro">
            
            <div class="row">

              <div class="col-sm-4">

                <div class="slogan col-sm-12 col-lg-12 col-md-12">Bringing our best to make you the best at home.</div>

                <div class="contactus-form">

                  <form>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Full Name</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your full name">
                    </div>

                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name = "message" rows="3"></textarea>
                      </div>

                    <button type="submit" class="btn btn-danger">Submit</button>

                  </form>

                </div>

              </div>

              <div class="col-sm-4">

              </div>

              <div class="col-sm-4">

              </div>

            </div>

          </div>

        </div>


      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>