<?php include '../includes/header.php'; ?>

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