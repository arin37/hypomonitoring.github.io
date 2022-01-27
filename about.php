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
                    <a class="nav-link active navItem" href="about.php">About</a>
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
      <div class="container text-center aboutBody">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 mt-auto mb-auto">
                <h1>About<br>Hypoglycemia</h1>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-12 justify">

                <h6><span class="display-6">S</span>ymptoms of hypoglycemia occur when there is not enough glucose or sugar in the blood. It is not a disease, but it is a sign of illness. Patients with low blood sugar or taking too much insulin causing hypoglycemia. It can be indicated as when there is not enough glucose in the patient's blood, hypoglycemia has occurred. The blood glucose level is less than 70 mg/dl or less than 3.9 mmol/L so it can be said that the patient has hypoglycemia. Symptoms of low blood sugar are feeling shaky, dizzy, sweaty, clumsy, hungry, stressed or anxious. Clinical consequences of hypoglycemia include neurological dysfunction, decreased mental function, gait disturbances, and falls. When hypoglycemia occurs, people should eat or drink fast-acting carbohydrates that will act like drugs, helping the patient recover from the terrible consequences of hypoglycemia. Hypoglycemia can be divided in some stages. The stage can be recognized as severe hypoglycemia, documented symptomatic hypoglycemia, asymptomatic hypoglycemia, probable symptomatic hypoglycemia, pseudo-hypoglycemia. A patient who has severe hypoglycemia needs the assistance of a third person for actively monitoring carbohydrate, glucagon. Documented symptomatic hypoglycemia can be recognized when the blood glucose level is below than 70 mg/dl or less equal 3.9 mmol/L with the physical hypoglycemic symptoms. The asymptomatic hypoglycemia can be determined as low blood sugar with no physical symptoms. Probable symptomatic hypoglycemia isn’t denoted by the plasma glucose but with the plasma glucose concentration which is less than 70 mg/dl or less equal 3.9 mmol/L. Pseudo-hypoglycemia can be determined for the diabetic patients and who are approaching the hypoglycemic symptoms with the measurement of blood glucose level of less than 70 mg/dl or less equal 3.9 mmol/L.</h6>

                <h6><span class="display-6">H</span>ypoglycemia mainly follows 15-15 rules for the medicine. At first, patients need to take medicine for the first 15 minutes after hypoglycemic attack then the patient has to wait for again 15 minutes after taking the medicine, then according to continuous monitoring of hypoglycemia detection result either the patient has to take another dose of medicine and if the detection result is negative, he doesn’t need any kind of glucose.</h6>

                <h6><h6><span class="display-6">H</span>ypoglycemia is most common, by far, in people with diabetes. Treatment for the disease often involves taking medication to increase insulin. Hypoglycemia can develop if things like food, exercise and diabetes medications are out of balance.</h6>
                <h6><h6><span class="display-6">C</span>ommon pitfalls for people with diabetes include:
                  <ul>
                    <li>Being more active than usual.</li>
                    <li>Drinking alcohol without eating.</li>
                    <li>Eating late or skipping meals.</li>
                    <li>Not balancing meals by including fat, protein and fiber.</li>
                    <li>Not eating enough carbohydrates.</li>
                    <li>Not timing insulin and carb intake correctly (for example, waiting too long to eat a meal after taking insulin for the meal).</li>
                  </ul>
                </h6>
                <h6><h6><span class="display-6">A</span>lso, if someone with diabetes uses the wrong insulin, takes too much or injects it incorrectly, that can cause hypoglycemia</h6>
                <h6> <h6><span class="display-6">H</span>ypoglycemia can be managed when you and your healthcare provider understand what causes your blood sugar to go down. Give your healthcare provider as much information as possible about any hypoglycemic episodes. Fixing the problem may be as simple as changing the times you take medication, eat and exercise. Minor changes to the types of food you eat may also help.</h6>
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
