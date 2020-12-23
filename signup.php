<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <title>Signup</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!--Css stylesheets-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">

    <!--Fonts Awesome-->

    <script src="https://use.fontawesome.com/a6ebce2573.js"></script>

    <!--Bootstrap Scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        function validate(){
          if(document.getElementById("Password").value!=document.getElementById("Confirm_Password").value){
              alert("Passwords Don't Match");
              return false;
          
          }
          if((document.getElementById("phone").value).length != 10) {
              alert("Enter valid Phone Number");
              return false;
          }
         
            
        }
    </script>
</head>

<body>
<script src="payment.js"></script>
    
   <div class="container">

      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="signup_create_acc.php" method="POST" name="signup_form" onSubmit="return validate();">
                 <img class="mb-4" src="coollogo_com-2967752.png" alt="" width="200" height="72">
                    <h1 class="wv-heading--title"> Sign Up </h1>
                    <h2 class="wv-heading--subtitle">Unlimited movies, TV shows and more.</h2><br/>

                  
                     <input required type="text" name="cus_name"  class="form-control my-input" id="name" placeholder=" Enter Your Name" ><br/>
                  

                  
                     <input required type="email" name="cus_email"  class="form-control my-input" id="email" placeholder="Enter Your Email"><br/>
                    
                  
                     <input required type="text" name="cus_phone" id="phone"  class="form-control my-input" placeholder="Enter Your Phone Number"><br/>
                    

                  
                    <input required type="password" name="cus_password" class="form-control my-input"  id="Password" placeholder="Enter Password"><br/>
                  

                  
                     <input required type="password" name="cus_confirm_password" class="form-control my-input"  id="Confirm_Password" placeholder="Enter Password Again"><br/>
                  

                  

                  <p class="small mt-3">By signing up, you are indicating that you have read and agree to the <a href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p><br/>

                  
                     <button type="submit" value="Save" name="move_forward-button" class=" btn btn-block send-button tx-tfm">Move Forward</button><br/>
                  

                  
                  

                  

               </form>
            </div>
         </div>
      </div>
   </div>
</body>



</html>
