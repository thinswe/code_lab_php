<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Process</title>
</head>
<body>
    <h3>Login Form</h3>

    <form method="POST">
        Email <input type="email" name="userEmail"><br>
        Password <input type="password" name="userPassword"><br>
        <input type="submit" value="Login" name="loginBtn">
    </form>

    <?php
        $email = 'admin@gmail.com';
        $password = '$2y$10$ABxJMXhyajBGC7ZvCgHAmeaTXq2orfR1VXTSWSAD5UKIHEX5D0HNW'; // admin123
        
        // password_hash('admin123',PASSWORD_BCRYPT); hash pwd
        // password_verify('admin123','$2y$10$ABxJMXhyajBGC7ZvCgHAmeaTXq2orfR1VXTSWSAD5UKIHEX5D0HNW'); pwd check
        if(isset($_POST['loginBtn'])){

            
            $userEmail = $_POST['userEmail'];
            $userPassword = $_POST['userPassword'];

            if($email == $userEmail && password_verify($userPassword,$password)) {
                echo "Login Success!";
            }
            else {
                echo "Login Fail!";
            }
        }
    ?>
</body>
</html>