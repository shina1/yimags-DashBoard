
<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from quixlab.com/demo/corbin/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 08:20:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Corbin - Simple Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-10">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-6">
                                <div class="welcome-content">
                                    <div class="brand-logo">
                                        <!-- <h2 style="color:white;">YIMALGS</h2> -->
                                    </div>
                                    <h3 class="welcome-title">Welcome to <span style="position: absolute; top: 0;left: -5px; color: #dc3545; z-index: -1;padding-top:75px; padding-left:163px;">Y</span> YIMALGS</h3>
                                    <!-- <div class="intro-social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Register your account</h4>
                                    <form action="registeraction.php" method="post">
                                        <div class="form-group">
                                            <label><strong>Admin Name</strong></label>
                                            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Phone Number</strong></label>
                                            <input type="number" name="phone" class="form-control" placeholder="080..........." required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Adress</strong></label>
                                            <input type="text" name="address" class="form-control" placeholder="Full Address" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" value="Password" required>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" name="register" class="btn btn-primary btn-block">Register Me</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="login.php">Sign in</a></p>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>