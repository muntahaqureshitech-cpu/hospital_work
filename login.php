<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
     require_once "master/linkcss.php";
    ?>
</head>
<body>
    <?php 
     require_once "master/header.php";
    ?>
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="card p-5">
                  <span class="text-center icon_set"> <i class="fa-solid fa-circle-user"></i></span> 
                <h2 class="my-3 text-center">Login</h2>
                <form action="auth.php" method="post">
                    <label class="form-label">Email</label>
                    <input type="email" name="user_email" placeholder="Enter your Email" class="form-control my-1">
                    <label class="form-label">Password</label>
                    <input type="password" name="user_password" placeholder="Enter your Password" class="form-control my-1">
                    <input type="submit" value="Login" class="btn btn-info">
                </form>
                </div>
            </div>
        </div>
    </div>


    <?php 
     require_once "master/linkjs.php";
    ?>
    
</body>
</html>