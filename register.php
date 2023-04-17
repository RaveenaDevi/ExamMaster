
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
   
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="login.css"/>

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>
<body>




<!--header start-->
<?php
require("header.php");
?>

<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
   
    echo"<div class='form'>
    <h3>you are already logged in.</h3><br/>
    <p class='link'>go to <a href='index.php'>Home</a>page</p>
    </div>";

}
// Include config file
require_once ("db.php");
 



// Define variables and initialize with empty values
$username =$email= $password = $confirm_password = "";
$username_err =$email_err= $password_err = $confirm_password_err = "";
 

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link,$sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    

   //validate email

    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";  
    }   
    else{
        $email = trim($_POST["email"]);
     
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // If the email is not in a valid format, then display an error message
       $email_err= "Invalid email format";
    } }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
// Validate confirm password
if(empty(trim($_POST["confirm_password"]))){
    $confirm_password_err = "Please confirm password.";     
} else{
    $confirm_password = trim($_POST["confirm_password"]);
    if(empty($password_err) && ($password != $confirm_password)){
        $confirm_password_err = "Password did not match.";
    }
}

        // Check input errors before inserting in database
        if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username,email,password) VALUES (?, ?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username,$param_email, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_email=$email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                echo"<div class='form'>
                <h3></h3><br/>
                <p class='link'>registered Succesfully ..click to<a href='login.php'>Login</a>now</p>
                </div>";
                exit();
            }
             else{
                echo "Oops! Something went wrong. Please try again later.";
            }
          

            // Close statement
            mysqli_stmt_close($stmt);
            mysqli_close($link);
        }
    }
}
?>


    <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="registration_form" name="form">
   
        <h1 class="login-title" >Registration</h1>
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" class="login-input <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" name="username" value="<?php echo $username; ?>" placeholder="Username" required />
        <span class="invalid-feedback"><?php echo $username_err; ?></span>
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <input type="text" class="login-input <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" name="email"  value="<?php echo $email; ?>" placeholder="Email Address">
        <span class="invalid-feedback"><?php echo $email_err; ?></span>
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" class="login-input <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>" name="password" placeholder="Password">
        <span class="invalid-feedback"><?php echo $password_err; ?></span>
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" class="login-input  <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>" name="confirm_password" placeholder=" confirm Password">
        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
        <input type="submit" name="submit" value="Register" class="login-button">
       
        <p class="link">Already Registered<a href="login.php">Click to Login</a></p>
    </form>

<!--footer start-->


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
