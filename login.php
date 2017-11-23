<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->  
  <link rel="stylesheet" href="main.css">
  <link rel ="stylesheet" href = "styles.css">
</head>
<body class="signin-body">
    <div class="container signin-container">
        <div class="row">
            <div class="col4"></div>
            <div class="col4">
                <div class="card signin-card">
                    <div class="card-block">
                        <img src="assets/classroomioDarkWithName.png" class="img-fluid signin-img">    
                        <form class="signin-form" action="login_php.php" method="post">
                              <div class="form-group">                                
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                              </div>
                              <div class="form-group">                                
                                <input type="password" class="form-control" id="password" name = "password" placeholder="Password">
                                <button type="submit"  class="signin-button">Sign in</button>
                              </div>
                            <div class="form-check"> 
                              <label class="form-check-label">
                              </label>
                            </div>
                        </form>
                    </div>
                </div>
                <a href="#createAccount" class="createacc" onclick="location.href = 'sign_up_main.html'">Create New Account</a>
            </div>
            <div class="col4"></div>
        </div>
    </div>
</body>

</html>