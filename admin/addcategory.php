<?php include '../includes/header.php'; ?>
<?php
    // insert operation 
    if(isset($_POST["submit"])){
        // echo 'click';
        $name = $_POST["name"];
        $img = $_POST["img"];
        $insertSQL = "INSERT INTO addcategory(Category_Name, Category_Icon) VALUES('$name', '$img')";
        $trans = mysqli_query($db, $insertSQL);
        if($trans){
            // echo 'insert...';
        }
        else{
            echo 'Something is wrong to inserted category in database';
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
                        <input type="file" name="img" class="form-control mb-3">
                        <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary mb-3">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>