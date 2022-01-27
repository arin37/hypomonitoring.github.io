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
                  <a class="nav-link navItem active" href="health_status.php">Health-Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navItem" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navItem" href="Contact.php">Contact Us</a>
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
                  <a class="nav-link navItem" data-bs-toggle="dropdown" href="#" style="text-decoration: none;"><img class="loginImg" src="images/propic.png"> <?php echo $firstname ?></a>
                  <div class="dropdown-menu dropdownPosition">
                      <a class="dropdown-item" href="profile.php">Profile</a>
                      <a class="dropdown-item" href="logout.php">Logout</a>
                  </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
        <?php
        $db = mysqli_connect('localhost', 'root', '', 'hypoglycemia');
        $query = "SELECT * FROM health_information where id='".$id."'";
        $results = mysqli_query($db, $query);
        while($row=mysqli_fetch_assoc($results))
        {
          $glucose = $row['Glucose'];
          $Heart = $row['Heart Rate'];
          $bp = $row['Blood Pressure'];
          $shivering = $row['Shivering'];
          $sweating = $row['Sweating'];
        }
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 healthBody">
                    <div class="card mt-2 healthCard">
                        <div class="card-body ">
                            <img style="height: 250px; width: 250px; margin-right: 250px;" src="images/heartrate.png" class="d-inline">
                            <h3 class="card-subtitle mb-2 d-inline">Glucose</h3>
                            <p class="card-text d-inline healthCardNumber"> <?php echo $glucose ?></p>
                        </div>
                    </div>
                    <div class="card mt-2 healthCard">
                        <div class="card-body ">
                            <img style="height: 250px; width: 250px; margin-right: 250px;" src="images/heartrate.png" class="d-inline">
                            <h3 class="card-subtitle mb-2 d-inline">Heart Rate</h3>
                            <p class="card-text d-inline healthCardNumber"> <?php echo $Heart ?></p>
                        </div>
                    </div>
                    <div class="card mt-2 healthCard">
                        <div class="card-body ">
                            <img style="height: 250px; width: 250px; margin-right: 250px;" src="images/heartrate.png" class="d-inline">
                            <h3 class="card-subtitle mb-2 d-inline">Blood Pressure</h3>
                            <p class="card-text d-inline healthCardNumber"> <?php echo $bp ?></p>
                        </div>
                    </div>
                    <div class="card mt-2 healthCard">
                        <div class="card-body ">
                            <img style="height: 250px; width: 250px; margin-right: 250px;" src="images/heartrate.png" class="d-inline">
                            <h3 class="card-subtitle mb-2 d-inline">Shivering</h3>
                            <p class="card-text d-inline healthCardNumber"> <?php echo $shivering ?></p>
                        </div>
                    </div>
                    <div class="card mt-2 healthCard">
                        <div class="card-body ">
                            <img style="height: 250px; width: 250px; margin-right: 250px;" src="images/heartrate.png" class="d-inline">
                            <h3 class="card-subtitle mb-2 d-inline">Sweating</h3>
                            <p class="card-text d-inline healthCardNumber"> <?php echo $sweating ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
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
