





<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dream forum innovators|Register</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shrotcut icon" href="images/logo1.png" />
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="css/style.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"/>
      </head>
    <body style="background-image: url(images/p2.png) ; background-size: cover;background-repeat: no-repeat;">
    

<section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="images/logo1.png" height="80" width="100"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link " href="index.php">Back To Home </a>
                    </li>
                   


                </ul>

            </div>
        </nav>

    </section>
        <div class="container"  >
            <div class="row justify-content-center mt-5">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-5">
                    <div class="card" >
                        <div class="card-header">
                            <div class="card-title"><h1 style="color: blue;" align="center">Register</h1></div>
                        </div>
                        <div class="card-body">
                            <form action="process.php" method="post">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" placeholder="Your full name" value="" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" placeholder="Your email" value="" class="form-control" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            
                                            <label for="Gender">Gender</label>&nbsp;&nbsp;
                                            
                                            <input type="radio" name="gender"  value="Male"  required>Male
                                            <input type="radio" name="gender"  value="Feale"  required>Female
                                           
                                            </div>
                                           
                                            <div class="form-group">
                                            <label for="phone">phone:</label>
                                            <input type="tel" name="phone" placeholder="Your number" value="" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                            <label for="course">Select Course:</label>
                                        <select class="form-control">
                                       
                                            <option Selected disabled>--Select Course--</option>
                                            <option>Website Designing</option>
                                            <option>Website Development</option>
                                            <option>Graphic Designing</option>
                                            <option>Static Website</option>
                                            <option>Dynamic Website</option>
                                        </select>
                                           
                                            </div>
                                            
                                            
                                                <input type="submit" value="Register" name="btn" class="btn btn-primary btn-block btn-lg" >
                                                
                            </form>
                        </div>
                    </div>

                </div>
          </div>
            </div>
            <br>
            <?php 
   include('footer.php');
   ?>
    </body>
    </html>