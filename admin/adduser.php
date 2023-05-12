<?php include '../includes/header.php'; ?>
<?php
    // insert operation 
    if(isset($_POST["submit"])){
        // echo 'click';
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $encryptPass = sha1($password); //sha1() function used here for password encryption
        $length = strlen($password);
        if($length>=8 && $password == $confirmPassword){
            $insertSQL = "INSERT INTO adduser(Name, Email, Password) VALUES('$name', '$email', '$encryptPass')";

            $trans = mysqli_query($db, $insertSQL);
            if($trans){
                // echo 'insert...';
            }
            else{
                echo 'Something is wrong to inserted data in database';
            }
        }
        else{
            echo 'Follow the rules to make your password:';
            echo '1.password lenght atleast 8 character';
            echo '2.password and confirm password must be same';
        }
        
                
    }
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="registration">
                    <h2 class="my-3 text-primary">Registration</h2>
                    <form action="" method="POST">
                        <input type="text" name="name" placeholder="Enter your name" class="form-control mb-3">
                        <input type="email" name="email" placeholder="Enter your email" class="form-control mb-3">
                        <input type="password" name="password" placeholder="Enter your password" class="form-control mb-3">
                        <input type="password" name="confirmPassword" placeholder="Re-enter your password" class="form-control mb-3">
                        <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary mb-3">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>