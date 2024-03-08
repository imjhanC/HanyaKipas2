<!DOCTYPE html>
<html lang="en">
<head>
    <title>HanyaKipas</title>
    <link rel="stylesheet" href="../LoginRegisterStyle/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <h1>REGISTER</h1>
        <img src="../CompanyLogo.PNG" alt="HanyaKipas Logo" style="width: 15%; height: 15%">

        <!-- Registration Form -->
        <form method = "post" action = "../process/index.php">
            <div class="input-box">
                <input type="text" id="uUsername" placeholder="Username" reqiured>
                <box-icon name='user' type='solid' ></box-icon>
            </div>

            <div class="input-box">
                <input type="email" id="uEmail" placeholder="Email" reqiured>
                <box-icon name='envelope' type='solid' ></box-icon>
            </div>

            <div class="input-box">
                <input type="password" id="uPassword" placeholder="Password" reqiured>
                <box-icon name='lock-alt' type='solid' ></box-icon>
            </div>

            <div class="input-box">
                <input type="password" id="uRePassword" placeholder="Re-Enter Password" reqiured>
                <box-icon name='lock-alt' type='solid' ></box-icon>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Registered User? <a href="../Login/index.php">Login</a></p>
            </div>
        </form>
    </div>

    <!-- To validate if the Password == Re-Enter Password -->
    <script>
        function validatePasswords() {
            let password = document.getElementById('uPassword').value;
            let reenterPassword = document.getElementById('uRePassword').value;

            if (uPassword !== uRePassword) {
                alert('Passwords do not match.');
                return false;
            }
            
            return true;
        }
    </script>
</body>
</html>