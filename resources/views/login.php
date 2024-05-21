<?php
include "./functions/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php includeWithVariables("./layout/header.php", array("title" => "Login")); ?>

<style>
    
.login-background{
    background-image: url('assets/img/background-image.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
<body>
    <div class="d-flex h-screen">
        <div class="col-lg-7 login-background p-0"></div>
        <div class="col-lg-5 d-flex flex-wrap align-items-center p-0">
            <div class="card-body">
                <h1 class="text-center font-weight-light my-4">Login</h1>
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label class="small mb-1" for="inputUsername">Username</label>
                        <input name="username" class="form-control py-4" id="inputUsername" type="text" placeholder="Enter username address" required />
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="inputPassword">Password</label>
                        <input name="password" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" required />
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        <input type="submit" name="login" class="col-12 btn btn-primary" value="Login">
                    </div>
                    <div class="card-footer text-center">
                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
