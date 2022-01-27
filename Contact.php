<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypoglycemia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar fixed-top navbar-dark bg-dark navbar-expand-md navHeight">
    <div class="container-fluid">
        <img style="height: 200px; width: 200px; margin-right: 250px; margin-top: 15px;" src="images/hypoglycemia.png" class="d-inline">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-toggler-right navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link navItem" href="health_status.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link navItem" href="health_status.php">Health-Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navItem" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navItem active" href="Contact.php">Contact Us</a>
                </li>
            </ul>
            <?php
            $db = mysqli_connect('localhost', 'root', '', 'hypoglycemia');
            $query = "SELECT * FROM session";
          	$results = mysqli_query($db, $query);
            while($row=mysqli_fetch_assoc($results))
            {
              $id = $row['id'];
              $firstname = $row['firstname'];
              $lastname = $row['lastname'];
              $phone = $row['phone'];
              $email = $row['email'];
              $password = $row['password'];
            }
             ?>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown dropdownParent">
                <a class="nav-link navItem" data-bs-toggle="dropdown" href="#"><img class="loginImg" src="images/propic.png"> <?php echo $firstname ?></a>
                <div class="dropdown-menu dropdownPosition">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
          </ul>
        </div>
    </div>
</nav>
      <div class="container text-center aboutBody">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 mt-auto mb-auto">
                <h1 class="text-center">Contact</h1>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-12  justify">
                <form class="contactForm" method="post" action="Contact.php">
                  <?php include('msg.php'); ?>
                    <input class="form-control" type="email" placeholder="From" id="EmailSender" name="EmailSender"><br>
                    <!-- <input class="form-control" type="email" placeholder="To"><br> -->
                    <input class="form-control" type="text" placeholder="Subject" id="subject" name="subject"><br>
                    <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message" rows="9" cols="50"></textarea><br>
                    <button class="btn btn-info contactButton" type="submit" name="send">Submit</button>
                </form>
              </div>
          </div>
      </div>

      <footer class="container-fluid footer text-center">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 mt-auto mb-auto">
              <img class="footerImage" src="images/heartrate.png">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 justify mt-auto mb-auto">
              <h4>Adress</h4>
              <h6>688 Beribadh Road, Mohammadpur, Dhaka - 1207, Bangladesh</h6>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 justify mt-auto mb-auto">
              <a class="foterAncor" href="Contact.php" style="color:blue">Contact</a><br>
              <a class="foterAncor" href="about.php" style="color:blue">About</a>
          </div>
        </div>
    </footer>
    <div class="container-fluid bg-dark text-center" style="height: 50px;">
      <p>Develops by abc</p>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
