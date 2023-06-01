<?php
include 'config/db.php';

$uname = '';
if (!empty($_GET['username'])) {
    $uname = $_GET['username'];
}

$sql = "select * from tbl_student";
$result = $conn->query($sql);
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
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <div class="contianer">

        <div class="menu">
            <div class="user">
                <div class="username">
                    <?php
                    echo $uname;
                    ?>

                </div>
                <div class="logout">
                    <a href="http://localhost/basephp/index.">Logout</a>
                </div>
            </div>

        </div>

        <div class="content">
            <div class="controls">
                <a class="btn btn-default" href="edit.php?add=1">Add New</a>
            </div>
            <br>
            <table>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        ?>

                        <tr>
                            <td>
                                <?php echo $row['id']; ?>
                            </td>
                            <td>
                                <?php echo $row['roll_num']; ?>
                            </td>
                            <td>
                                <?php echo $row['first_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['last_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['gender']; ?>
                            </td>
                            <td>
                                <?php echo $row['class_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['fee']; ?>
                            </td>
                            <td>
                                <a href="http://localhost/basephp/edit.php?id=<?php echo $row['id']; ?>">Edit</a>

                            </td>
                            <td>
                                <a href="">Delete</a>

                            </td>
                        </tr>

                        <?php

                    }
                }
                ?>
            </table>
        </div>

    </div>

    <script src="" async defer></script>

</body>

</html>