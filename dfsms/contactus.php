<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Login Page</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<div class="col-xl-8 pa-5">
                        <div class="auth-form-wrap py-xl-0 py-50">
     <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                                <form method="post">
                                    <h1 class="display-4 mb-10">Welcome Back :)</h1>
                                 
<div class="form-group">
<input class="form-control" placeholder="Username" type="text" name="username" required="true">
</div>

<div class="form-group">
<div class="input-group">
<input class="form-control" placeholder="Password" type="password" name="password" required="true">
<div class="input-group-append">
<i class="fa fa-eye" style="margin-top: 13px;margin-left: -25px;" id="showpass" name="showpass" onclick="showpassword()"></i>
</div>
</div>
</div>
                              
<button class="btn btn-warning btn-block" type="submit" name="login">Login</button>
<p class="font-14 text-center mt-15"><a href=contactus.php>Having trouble logging in?</a></p>
     
                                </form>
                            </div>
                        </div>