<!-- redirection from login page if user already logged in -->
<?php
session_start();
if(isset($_SESSION['username'])&& isset($_SESSION['email'])){
    header('location:./dashboard');
}
?>
<!-- end -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap used -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- end -->
</head>
<body>
     <p class="text-center alert alert-<?php echo $_SESSION['type'];$_SESSION['type']=null?>" style="display:<?php if($_SESSION['show']=='yes'){echo 'block';}else{echo'none';} $_SESSION['show']=null?>;"><?php echo $_SESSION['msg']; $_SESSION['msg']=null?><p>
    <div class="container-fluid login">
<div class="container ">
    <a href="https://your-doamin.com/">
        <img class="logo" src="./img/logof.png" alt="logo" >
        <h6 class="logo">Logo</h6>
    </a>
</div>


<div class="container">
    <div class="row ">
        <div class="col-md-6">
            <div class="part1">
                <!-- login Form -->
                <form  action="./login_handler/index.php" method="post" enctype="multipart/form-data" onsubmit="contin()">
                    <h3 class="text-center" id="quote">Welcome Dear</h3>
                    <hr style="width: 20%;border: 1px solid crimson;margin-top:-7px;">
                    <div class="form-row">
                      
                        <div class="form-group col-12">
                            <label for="name">Email</label>
                          <input type="email" name="email" id="email"  class="form-control" placeholder="Your Email.."/>
                        </div>
                        <div class="form-group col-12">
                            <label for="name">Password</label>
                         <input type="password" name="password" id="pass"  class="form-control" placeholder="Your Password.." />
                        </div>
                    </div>
                         <!-- submit button -->
                            <div class="text-center">
                                <button class="btn float-left ml-3" type="submit" id="reg" name="submit">Login</button>
                                
                            </div>
                           
                   
                </form>
                <!-- end -->
                   </div>
                <div class="part mb-2">
                    <div class="text-center" >
                        <h5>Not Registered? ? <a href="" style="color:blue;font-size: 18px;color:crimson;" >Register</a></h5>
                    </div>
                    
                   </div>
                 
            </div>
   
        <div class="col-md-4">
            
            <div class="parts">
                
                <blockquote>“Minds are like flowers, they only open when the time is right.”</blockquote>
              <?php include'robo.svg'  ?>
                  
            </div>
        </div>
    </div>
    
</div>
    </div>

    <script>
        // function for message on clicking the submit button
        function contin(){
            document.querySelector('#reg').innerHTML='Please.......wait';
        }

    </script>
</body>
</html>