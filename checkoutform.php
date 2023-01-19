<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Booking</title>
    <link rel="stylesheet" type="text/css" href="styles1.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
 
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="members.php">Our Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php" >Services</a>
        </li>
      
        
        <li class="nav-item">
          <a class="nav-link" href="form.php">Join Us</a>
        </li>
  
        
        
      </ul>
    </div>
  
</nav>

</section>
<section id="services">
  <div class="container text-center">
 
                    
                    <form action="pdf.php" method="POST" accept-charset="utf-8">
                      <input type="hidden" name="p_name" value="<= $p_name;?>">
                      <input type="hidden" name="price" value="<= $price;?>">
                    
                      
                      
                     
                      <h2 class="title">Enter Your Payment Details</h2>
                       
                      <div class="form-group">
                        <input type="text" name="nid" class="form-control" placeholder="NID" required>
                      </div>
                      <div class="form-group">
                        <input type="text" name="cardnumber" class="form-control" placeholder="Card Number" required>
                      </div>
                      <div class="form-group">
                        <input type="password" name="pin" class="form-control" placeholder="Pin" required>
                      </div>
                      
                      <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" placeholder="Enter Your Email" value="Click to Pay" required>
                      
                      </div>
                      




                    </form>



        </div>
    </div>
</div>

    
</body>
</html>