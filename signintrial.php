<!DOCTYPE html>
<html>

<head>



  <meta charset="utf-8">
  <title>Signin</title>
<!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

<!--Css stylesheets-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="signin.css">

<!--Fonts Awesome-->

<script src="https://use.fontawesome.com/a6ebce2573.js"></script>

<!--Bootstrap Scripts-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </head>

  <body class="text-center">

    <form action="signin.php" method="post"class="form-signin myform" >
      <img class="mb-4" src="coollogo_com-2967752.png" alt="" width="200" height="72">
      <h1 class="please-sign-in">Please Log in</h1>
      <p>Please fill in your credentials to login.</p>

      <div class="form-group">
         <input type="email" id="inputEmail" name="email" class="form-control my-input"  placeholder="Email address" autofocus>
         
      </div>

      <div class="form-group" >
         <input type="password" required id="inputPassword" name="password" class="form-control  my-input" placeholder="Password" required>
         
        </div>



      
      <p >New to Leisure?<a href="signup.php"><b>Sign up now</b></a>. </p>
        <br>
      <input class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
      <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>

   

  </body>
</html>
