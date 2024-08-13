<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

</head>
<body>
     <header>
         <h1 class="logo"> <b>AVINYA 2023</b></h1>
        <nav class="navigation">
        <nav class="navigation">
        
        <a href="about.php">About</a>
        <a href="#">Service</a>
        <a href="index.php">Login</a> 
        <a href="#"></a>
    </nav> 
    </header> 
<div class="wrapper">

<div class="form-box ">
    <h1>AVINYA</h1>
    <h3>Register</h3>
    <form action="func.php" method="post">
        <div class="input-box">
            <span class="icon">
                <ion-icon name="person-outline"></ion-icon>
            </span>

            <input type="text" placeholder="Enter New Username" name="username" required>
            <!-- <label>Username</label> -->
        </div>
        <div class="input-box">
            <span class="icon">
                <ion-icon name="mail-outline"></ion-icon>
            </span>
 
            <input type="email" placeholder="Enter your Email Address" name="email" required>
            <!-- <label>Email</label> -->
        </div>
        <div class="input-box">
            <span class="icon">
            <ion-icon name="lock-open-outline"></ion-icon>
        </span>
            <input type="password" placeholder="Create new password" name="password" required >
            <!-- <label>Password</label> -->

        </div>
        <div class="remember-forgot">
            <p> <a href="index.php"><i>Already have an Account?</i></a></p>
        </div>
        <button type="submit" class="btn" name="submit">Register</button>
        </form>
    </div>

</body>
</html>