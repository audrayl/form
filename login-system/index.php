


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>SignUp Form</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("db.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($conn,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($conn,"INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>SignUp successfull!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>

            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                <i class="fa-solid fa-user"></i>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                <i class="fa-solid fa-envelope"></i>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                <i class="fa-solid fa-lock"></i>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                
                <div class="field input">
                <i class="fa-solid fa-lock"></i>
                    <label for="password">Repeat Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Sign Up" required>
                </div>
                <div class="links">
                    Already have account? <a href="login.php">Log In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>


