 <?php 
 require 'database.php';
 
 if(isset($_POST['submit'])){
     // Add database connection

     $username = $_POST['username'];
     $password = $_POST['password'];
     $confirmPassword = $_POST['confirmPassword'];

     //check field is empty or not
     if(empty($username) || empty($password) || empty($confirmPassword)){
            header("Location: ../register.php?error=emptyfields&username=".$username);
            exit();
     } else if(!preg_match("/^[a-zA-Z0-9]*/",$username)){      //match entered username & pass

         header("Location: ../register.php?error=invalidusername&username=".$username);
            exit();
         
     } else if($password !== $confirmPassword){ // match inserted password matched with confirm passowrd
           header("Location: ../register.php?error=incorrectpassword&username=".$username);
            exit();
     } else{
         $sql = "SELECT username FROM users WHERE username=?";
         $stmt = mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt,$sql)){
              header("Location: ../register.php?error=&sqlerror=");
            exit();
         }else{
             mysqli_stmt_bind_param($stmt,"s",$username); 
             mysqli_stmt_execute($stmt);
             mysqli_stmt_store_result($stmt);
             $rowcount = mysqli_stmt_num_rows($stmt);

             if($rowcount > 0){
                   header("Location: ../register.php?error=usernametaken");
            exit();
             } else {
                        $sql = "INSERT INTO users (username, password) VALUES (?,?)";
                        
                        $stmt = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                                header("Location: ../register.php?error=&sqlerror=");
                                exit();
                        }else{
                            $hashPassword = password_hash($password,PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt,"ss",$username,$hashPassword); 
                            mysqli_stmt_execute($stmt);
                            header("Location: ../register.php?success=registered");
                                exit();
                        }         
             }
         }
     }

     mysqli_stmt_close($stmt);
     mysqli_close($conn);
     
 }
 ?>