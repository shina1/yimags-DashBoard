<?php
require("conn.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
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
                                        <a href="index-2.html">YIMAGS</a>
                                    </div>
                                    <h3 class="welcome-title">Welcome to YIMAGS</h3>
                                    
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="verify.php" method="POST">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" >
                                        </div>
                                       
                                        <div class="text-center">
                                            <button type="submit" name="login" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                   
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