<?php 
include ("login.php"); 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Project Diary</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

      body {
          padding-top: 51px;
      }

      .box {
          background-color: #FFF5E6;

      }

      #topContainer {
        background-image: url("images/diary.jpg");
        width: 100%;
        background-size: cover;
        padding-top: 40px;
      }

      #topRow {
        margin-top: 100px;
        text-align: center;
      }

      #topRow h1 {
        font-size: 300%;
      }

      .bold {
        font-weight: bold;
      }

      .marginTop {
        margin-top: 15px;
        margin-bottom: 15px;
      }

      .center {
        text-align: center;

      }

      .title {
        margin-top: 100px;
        font-size: 200%;
      }

      .star {
        font-size: 0.8em;

      }

      #footer {
        background-color: #85D6FF;
        padding-top: 70px;
        width: 100%;
      }

    </style>



  </head>


  <body data-spy="scroll" data-target="#smoothScroll">

   <div class="navbar navbar-default navbar-fixed-top" id="fixedTopNavbar">
      <div class="container">

          <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <a href="" class="navbar-brand">My Diary</a>

          </div>


          <div class="collapse navbar-collapse" id="smoothScroll">

            <form class="navbar-form navbar-right" role="form" method="post">

               <div class="form-group">
                  <input type="email" name="loginemail" class="form-control" placeholder="Email" value="<?php echo addslashes($_POST["loginemail"]); ?>"/>
               </div>

               <div class="form-group">
                  <input type="password" name="loginpassword" class="form-control" placeholder="Password" value="<?php echo addslashes($_POST["loginpassword"]); ?>"/>
               </div>

               <input type="submit" name="submit" class="btn btn-success" value="Sign In" />
               
           </form>

          </div>

      </div>
  </div>





        <div class="container contentContainer" id="topContainer">

                  <div class="row">

                      <div class="col-md-6 col-md-offset-3 box" id="topRow">
                                
                            <h1 class="marginTop">My Diary</h1>
                                      
                            <p class="lead">Your own personal diary, with you wherever you go!</p>

                            <?php

                                if($error) {

                                  echo '<div class="alert alert-danger">'.addslashes($error).'</div>';

                                }

                                 if($message) {

                                  echo '<div class="alert alert-success">'.addslashes($message).'</div>';

                                }

                            ?>
                                                                            
                            <p class="bold marginTop">Interested? Sign Up Below!</p>
                                      
                            <form class="marginTop" method="post">

                                <div class="form-group">
                                	<label for="email">Email Address</label>
                                    <input type="email" name ="email" class="form-control" placeholder="Your email" value="<?php echo addslashes($_POST["email"]); ?>" />
                                </div>

                                <div class="form-group">

                                	<label for="password">Password</label>
                                    <input type="password" name ="password" class="form-control" placeholder="Your password" value="<?php echo addslashes($_POST["password"]); ?>"/>

                                </div>

                                <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop" />

                            </form>

                      </div>


                  </div>
        </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(".contentContainer").css("min-height", $(window).height());
    </script>

  </body>
</html>



