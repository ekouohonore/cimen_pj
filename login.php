<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="./login.css">
</head>
<body>

    <div class="main" style="padding-top: 90px;">

        <!-- Sign up form -->
      
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="./assets/login.jpg" alt="sing up image"></figure>
                        <a href="../index.php" class="signup-image-link">Back To Home</a>
                        
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">LOGIN</h2>
                        <form  class="register-form" id="login-form" action="login.php" method="post">
                            <div class="alert alert-danger"><h4 id="e_msg"></h4></div>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="admin_username" id="your_name" placeholder="Admin Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="login_admin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    
    
</body>
</html>