<?php include '../includes/header.php'; ?>
<?php
    // delete operation 
    if(isset($_GET["delete"])){
        // echo 'click';
        $del_id = $_GET['delete'];
        $delSQL = "DELETE FROM addcategory WHERE ID = '$del_id'";
        $trans3 = mysqli_query($db, $delSQL);
        if($trans3){
            // header('Location: viewalluser.php');
        }
        else{
            echo 'error 5';
        }
        
                
    }
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="categories">
                    <h2 class="my-3 text-primary">Categories</h2>
                    <table class="table table-primary table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Category_Name</th>
                            <th>Icon</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            // read operation 
                            $readSQL = "SELECT * FROM addcategory";
                            $trans2 = mysqli_query($db, $readSQL);
                            $a = 1;
                            while($row = mysqli_fetch_assoc($trans2)){
                                $ID = $row['ID'];
                                $name = $row['Category_Name'];
                                $icon = $row['Category_Icon'];
                                $a++; 
                            
                        ?>
                        <tr>
                            <td><?php echo $ID?></td>
                            <td><?php echo $name?></td>
                            <td><?php echo $icon?></td>
                            <td>
                                <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteOP">Del</a>
                                <a href="viewallcategory.php?edit=<?php echo $ID;?>" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>

                    <!-- delete modal -->
                    <!-- Modal -->
                    <div class="modal fade" id="deleteOP" tabindex="-1" aria-labelledby="deleteOPLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteOPLabel">are you want to sure to delete this Category???</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- <div class="modal-body">
                            ...
                        </div> -->
                        <div class="modal-footer">
                            <a href="viewallcategory.php?delete=<?php echo $ID;?>" class="btn btn-danger">yes</a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">no</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- delete modal -->

                    <!-- edit operation  -->
                    <?php  
                        // Edit operation 
                        if(isset($_GET["edit"])){
                            // echo 'click';
                            $edit_id = $_GET['edit'];
                            $editSQL = "SELECT * FROM addcategory WHERE ID = '$edit_id'";
                            $trans4 = mysqli_query($db, $editSQL);
                            
                            while($row2 = mysqli_fetch_assoc($trans4)){
                                $ID = $row2['ID'];
                                $name = $row2['Category_Name']; }
                    ?>
                    
                    <!-- update  -->
                    <h2 class="mb-3 mt-5 text-primary">Update Information</h2>
                    <form action="" method="POST">
                        <input type="text" name="name" value="<?php echo $name;?>" class="form-control mb-3">
                        <input type="submit" name="update" value="UPDATE" class="btn btn-primary mb-3">
                    </form>
                    <?php   
                        }
                        if(isset($_POST["update"])){
                            $name = $_POST["name"];
                            $updateSQL = "UPDATE addcategory SET Category_Name = '$name'  WHERE ID = '$edit_id'";
                            $trans5 = mysqli_query($db, $updateSQL);
                        }
                    ?>
                    <!-- edit operation  -->
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>