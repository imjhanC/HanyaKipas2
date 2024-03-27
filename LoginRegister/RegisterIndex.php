<!DOCTYPE html>
<html lang="en">
<head>
    <title>HanyaKipas</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="LoginRegisterStyle/style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="wrapper">
        <h1>Register an Account</h1>

        <!-- Registration Form -->
        <form method = "post" action = "../index.html">
            <div class="input-box">
                <input type="text" id="uUsername" placeholder="Username" required>
                <box-icon name='user' type='solid' ></box-icon>
            </div>
            <div id="userName-error" style="color: red;"></div>

            <div class="input-box">
                <input type="email" id="uEmail" placeholder="Email" required>
                <box-icon name='envelope' type='solid' ></box-icon>
            </div>
            <div id="email-error" style="color: red;"></div>

            <div class="input-box">
                <input type="password" id="uPassword" placeholder="Password" required>
                <box-icon name='lock-alt' type='solid' ></box-icon>
            </div>
            <div id="password-error" style="color: red;"></div>

            <div class="input-box">
                <input type="password" id="uRePassword" placeholder="Re-Enter Password" required>
                <box-icon name='lock-alt' type='solid' ></box-icon>
            </div>
            <div id="repassword-error" style="color: red;"></div>

            <button type="submit" class="btn">Register</button>

            <div class="register-link">
                <p>Registered User? <a href="LoginIndex.php">Login</a></p>
            </div>
        </form>
        
        <img src="../CompanyLogo.PNG" alt="HanyaKipas Logo">
    </div>

    <!-- To validate if the Password == Re-Enter Password -->
    <script>
        funnction validateForm() {
            var userName =document.getElementById("uUsername").value;
            var emailAddress =document.getElementById("uEmail").value;
            var password =document.getElementById("uPassword").value;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            var isValid  = true;
            //Validate username
            if(userName.trim() === ''){
                document.getElementById("userName-error").innerText = 'Name is required';
                isValid = false; 
            }  else {
                document.getElementById("userName-error").innerText = '';
            } 

            //Validate email address
            if(emailAddress.trim() === '' || emailPattern.test(emailAddress)){
                document.getElementById("email-error").innerText = 'Email Address is required';
                isValid = false; 
            } else {
                document.getElementById("email-error").innerText = '';
            } 
        }
    </script>

</body>
</html>