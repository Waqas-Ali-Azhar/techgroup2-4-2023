<?php
// print_r($_GET);
$username = $_GET['username'];
$password = $_GET['password'];

if ($username == 'admin' && $password == 'test') {

    header('Location: http://localhost/basephp/dashboard.php?username=' . $username);
    exit;

} else {
    if (!empty($_GET)) {
        echo "Username and Password is wrong";
    }

}

// print($username);
// print($password);
// exit;
?>
<html>

<head>
</head>

<body>


    <div class="container">

        <form action="">
            <div class="field-group">
                <lable>Username</label>
                    <input type="text" name="username" />
            </div>
            <div class="field-group">
                <lable>Password</label>
                    <input type="password" name="password" />
            </div>
            <div class="field-group">

                <input type="submit" name="" value="Login" />
            </div>
        </form>

    </div>

</body>

</html>