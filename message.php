
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>wesam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/97441ecf66.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
      <div class="action_bar d-none d-lg-block">
          <div class="container">
              <div class="row">
                  <div class="col-xl-3 col-lg-4" style="text-align: right">
                  </div>
                  <div class="col-xl-7 col-lg-6 bordered">
                  </div>
                  <div class="col-lg-2 social">
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
         <a class="navbar-brand" href="#"><img class="logo-img" src="images/logo.png"></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav ml-auto">
                   <li class="nav-item active">
                       <a class="nav-link" href="home2.php">HOME<span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="project.php">PROJECTS</a>
                   </li>
                   <li class="nav-item dropdown view">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        MEMBERS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="sadia_anjum/sadia.html" target="_blank">SADIA ANJUM</a>
                        <a class="dropdown-item" href="fahim_hossain.html" target="_blank">FAHIM HOSSAIN</a>
                        <a class="dropdown-item" href="rahnuma.php" target="_blank">RAHNUMA MAHZABIN</a>
                        <a class="dropdown-item" href="tasmuna.html" target="_blank">TASMUNA ISLAM</a>
                        </div>
                  </li>
                   <li class="nav-item">
                       <a class="nav-link" href="contact.php">CONTACT US</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="message.php">MESSAGES</a>
                   </li>
                </ul>
            </div>
            </nav>
      </div>
  </header>
   <section id="s1">
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-3"></div>
               <div class="col-lg-6">
                   <span class="wesam"><b>WESAM</b></span>
               </div>
               <div class="col-lg-3"></div>
           </div><br>
           <div class="row">
              <div class="col-lg-3"></div>
               <div class="col-lg-1">
                   <hr>
               </div>
               <div class="col-lg-3">
                   <p style="font-family:font-family: courier; font-size: 120%;">“The beautiful thing about learning is that no one can take it away from you” – B. B. King.</p>
               </div>
               <div class="col-lg-4">
					<button class="con"><b><a class="log-button" href="logout.php">Logout</a></b></button>

               </div>
               <div class="col-lg-1"></div>

           </div>
       </div>
   </section>
   <section id="s3">
     <div class="container">
       <div class="row">
         <div class="col-lg-12">
           <h2 class="section-title"><b><br>Contact Us<b></h2>
         </div>
       </div>
       <div class="row">
         <div class="col-lg-7 mb-4 mb-lg-0">
           <form method="post" action="message.php">
             <?php include('msg.php'); ?>
             <input type="text" class="form-control mb-3" id="name" name="EmailSender" placeholder="From">
             <!-- <input type="email" class="form-control mb-3" id="mail" name="EmailReceiver" placeholder="To"> -->
             <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
             <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message" rows="9" cols="50"></textarea>
             <button type="submit" name="send" class="btn btn-primary">SEND MESSAGE</button>
             <br>
           </form>
         </div>
         <div class="col-lg-5">
           <img src="que.png" class="img-fluid foco" style="height: 300px; width: 80%;">
           <br><br>
         </div>
       </div>
     </div>
    <br>
   </section>
   <footer>
      <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
                <span class="mb-2 fot-add" style="color: #ff8800"><b>Contact Us</b></span>
              <ul class="address">
                <li class="mb-2">WESAM</li>
                <li class="mb-2">+8801912321412</li>
                <li class="mb-2">wesam2021@gmail.com</li>
              </ul>
            </div>
        </div>
        <div class="row Copyright">
            <div class="col-lg-5 col-md-10 d-sm-none d-md-block">
                <span class="span2">Copyright &copy; 2021 | Web Technology</span>
            </div>
        </div>
    </div>
   </footer>
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
