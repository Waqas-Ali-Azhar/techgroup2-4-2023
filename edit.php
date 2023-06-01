<?php

include 'config/db.php';
$row = array(
    'roll_num' => '',
    'first_name' => '',
    'last_name' => '',
    'gender' => '',
    'fee' => '',
);


if (!empty($_GET['add'])) {
    $add = 1;
}
if (!empty($_GET['edit'])) {
    $edit = 1;
}
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}


if (!empty($_GET['rollnumber'])) {
    $form_data = 1;
    $roll_number = !empty($_GET['rollnumber']) ? $_GET['rollnumber'] : '';
    $first_name = !empty($_GET['first_name']) ? $_GET['first_name'] : '';
    $last_name = !empty($_GET['last_name']) ? $_GET['last_name'] : '';
    $gender = !empty($_GET['gender']) ? $_GET['gender'] : '';
    $fee = !empty($_GET['fee']) ? $_GET['fee'] : '';
}




if ($add) {

    if (!empty($_GET['rollnumber'])) {
        // Adding a new record form
    }
}

if ($adit) {

    if (!empty($_GET['rollnumber'])) {
        // Updating a new record with form
    }
}





if ($id) {

    $sql = "select * from tbl_student where id=" . $id;


    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }


}


// run for add /edit form

if (!empty($_GET['rollnumber'])) {
    $roll_number = !empty($_GET['rollnumber']) ? $_GET['rollnumber'] : '';
    $first_name = !empty($_GET['first_name']) ? $_GET['first_name'] : '';
    $last_name = !empty($_GET['last_name']) ? $_GET['last_name'] : '';
    $gender = !empty($_GET['gender']) ? $_GET['gender'] : '';
    $fee = !empty($_GET['fee']) ? $_GET['fee'] : '';
}



$sql = '';
// Add new Record
if (!empty($_GET['add']) && !empty($_GET['rollnumber'])) {

    $sql = "insert into tbl_student (roll_num, first_name, last_name, gender, fee) Values ('" . $roll_number . "','" . $first_name . "','" . $last_name . "','" . $gender . "','" . $fee . "')";
} elseif (!empty($_GET['edit'])) {

    $sql = "update tbl_student SET first_name='" . $first_name . "', last_name='" . $last_name . "', gender='" . $gender . "', fee='" . $fee . "' where id=" . $update_id;
}

if ($sql) {
    $result = $conn->query($sql);
    if (!empty($_GET['add']) && $result) {
        $id = $conn->insert_id;

        echo "Added Succefully";
    } elseif (!empty($_GET['edit']) && $result) {
        $id = $_GET['id'];
        echo "Updated Succesfully";
    }
} else {
    //dashboard edit link
    $id = !empty($_GET['id']) ? $_GET['id'] : '';
}

// read data


if ($id) {

    $sql = "select * from tbl_student where id=" . $id;


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

                <br><br><br>

                <div class="field-group ib">
                    <?php
                    if (!empty($_GET['id'])) {
                        ?>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                        <input type="hidden" name="edit" value="1" />
                        <input type="submit" value="Update">
                        <?php
                    } else {
                        ?>

                        <input type="hidden" name="add" value="1">
                        <input type="submit" value="Add">

                        <?php
                    }

                    ?>
                </div>

                <div class="field-group ib">
                    <a class="btn btn-default" href="dashboard.php">Goto Dashboard</a>
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