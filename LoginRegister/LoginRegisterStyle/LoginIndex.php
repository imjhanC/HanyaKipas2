<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>Login page</title>

    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="LoginRegisterStyle/style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <div class="wrapper">
        <h1>LOGIN</h1>

        <!-- Login Form -->
        <form method = "post" action = "../index.html">
            <div class="input-box">
                <input type="text" placeholder="Username" reqiured>
                <box-icon name='user' type='solid' ></box-icon>
            </div>

            <div class="input-box">
                <input type="email" placeholder="Email" reqiured>
                <box-icon name='envelope' type='solid' ></box-icon>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" reqiured>
                <box-icon name='lock-alt' type='solid' ></box-icon>
            </div>

            <div class="remember-forget">
                <label><input type="checkbox"> Remember Me </label>
                <a href="../ResetPassword/index.php">Forget Password? </a> 
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>New User? <a href="RegisterIndex.php">Register</a></p>
            </div>
        </form>

        <img src="../logo_with_name-removebg-preview.png" alt="HanyaKipas Logo">
    </div>

</body>
</html>