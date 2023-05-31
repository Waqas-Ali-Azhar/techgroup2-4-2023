<?php

include 'config/db.php';
$row = array(
    'roll_num' => '',
    'first_name' => '',
    'last_name' => '',
    'gender' => '',
    'fee' => '',
);

if (!empty($_GET['rollnumber'])) {
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $gender = $_GET['gender'];
    $fee = $_GET['fee'];
    $update_id = $_GET['id'];

    $sql = "update tbl_student SET first_name='" . $first_name . "', last_name='" . $last_name . "', gender='" . $gender . "', fee='" . $fee . "' where id=" . $update_id;
    $result = $conn->query($sql);
    if ($result) {
        echo "Updated Succesfully";
    }
}
if (!empty($_GET['id'])) {

    $edit_id = $_GET['id'];

    $sql = "select * from tbl_student where id=" . $edit_id;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }



}


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="container">

        <div class="menu">
            <div class="user">
                <div class="username">


                </div>
                <div class="logout">
                    <a href="http://localhost/basephp/index.">Logout</a>
                </div>
            </div>

        </div>

        <div class="content">

            <form>
                <div class="field-group">
                    <lable>Roll Number</label>
                        <input type="text" name="rollnumber" value="<?php echo $row['roll_num']; ?>" />
                </div>

                <div class="field-group">
                    <lable>First Name</label>
                        <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" />
                </div>

                <div class="field-group">
                    <lable>Last Name</label>
                        <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" />
                </div>

                <div class="field-group">
                    <lable>Gender</label>
                        <input type="text" name="gender" value="<?php echo $row['gender']; ?>" />
                </div>

                <div class="field-group">
                    <lable>Fee</label>
                        <input type="text" name="fee" value="<?php echo $row['fee']; ?>" />
                </div>

                <div class="field-group">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                    <input type="submit" value="Update">
                </div>

            </form>

        </div>


    </div>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <script src="" async defer></script>
</body>

</html>