
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1 class="logo"> <b>AVINYA 2023</b></h1>
          <nav class="navigation">
        <!-- <a href="home.php">Home</a> -->
        <a href="about.php">About</a>
        <a href="#">Service</a>
        <a href="register.php">Register</a> 
        <a href="#"></a>
    
       
    </nav>
    </header>

    <div class="wrapper">

        <div class="form-box">
        <h1>AVINYA</h1>
        <h3>Login</h3>
        <form action="func.php" method="post">
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail-outline"></ion-icon>
                </span>

                <input type="email" placeholder="Enter your E-mail Address" name="email" required >
                <!-- <label>Email</label> -->
            </div>
            <div class="input-box">
                <span class="icon">
                <ion-icon name="lock-open-outline"></ion-icon>
            </span>
                <input type="password" placeholder="Enter your Password" name="password" required >
                <!-- <label>Password</label> -->

            </div>
        
            <button type="submit" class="btn" name="log_submit">Login</button>
            <div class="login-register">
                <p>Don't have an accout?<a href="register.php" class="register-link">Register</a></p>
            </div>
        </form>
    </div>


</html>