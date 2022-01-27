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
                    <a class="nav-link navItem" href="Contact.php">ContactUs</a>
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
<div class="container-fluid homeSection">
    <div class="row profileContainer">
        <div class="col-lg-2"></div>
        <div class="col-lg-2 text-center">
            <img class="profileImage" src="images/propic.png">
            <a class="btn btn-info profileButton" type="button" href="editProfile.php">Edit Profile</a>
            <a class="btn btn-info profileButton" type="button" href="delete.php">Delete Profile</a>
        </div>
        <div class="col-lg-6 profileInfo">
            <div class="row">
                <div class="col-lg-12 profileInfoRow">
                    <h4 class="profileName"><?php echo $firstname ?></h4>
                    <hr>
                    <h4 class="profileName"><?php echo $lastname ?></h4>
                    <hr>
                    <h4 class="profileName"><?php echo $phone ?></h4>
                    <hr>
                    <h4 class="profileName"><?php echo $email ?></h4>
                    <hr>
                    <h4 class="profileName"><?php echo $password ?></h4>
                </div>
            </div>
            <?php
            $query = "SELECT * FROM health_information WHERE id='".$id."'";
            $results = mysqli_query($db, $query);
            while($row=mysqli_fetch_assoc($results))
            {
              $H_id = $row['H_id'];
              $glucose = $row['Glucose'];
              $heart = $row['Heart Rate'];
              $bp = $row['Blood Pressure'];
              $shivering = $row['Shivering'];
              $sweating = $row['Sweating'];
              $id = $row['id'];
            }
            if ($glucose < 70) {
              $hypoglycemia = "Positive";
            }
            else {
              $hypoglycemia = "Negative";
            }
             ?>
            <div class="row">
                <div class="col-lg-12 profileInfoRow mt-3">
                    <h4>Hyphoglysemia Status</h4>
                    <h4 class="profileName"><?php echo $hypoglycemia ?></h4>
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
            <h6>88 Beribadh Road, Mohammadpur, Dhaka - 1207, Bangladesh</h6>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 justify mt-auto mb-auto">
            <a class="foterAncor" href="Contact.php" style="color:blue;">Contact</a><br>
            <a class="foterAncor" href="about.php" style="color:blue;">About</a>
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
