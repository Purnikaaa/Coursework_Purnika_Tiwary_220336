<?php
include 'confi.php';

if (isset($_POST['submit'])) {

    // $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    // $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    // $country = mysqli_real_escape_string($conn, $_POST['country']);
    // $pnumber = mysqli_real_escape_string($conn, $_POST['pnumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $passwd = mysqli_real_escape_string($conn, md5($_POST['passwd']));
    // $cpasswd = mysqli_real_escape_string($conn, md5($_POST['cpasswd']));
    // $passwd = mysqli_real_escape_string($conn, $_POST['passwd']);
    // $cpasswd = mysqli_real_escape_string($conn, $_POST['cpasswd']);

    $select = mysqli_query($conn, "SELECT * FROM `contact` WHERE email = '$email' AND passwd = '$passwd'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $message[] = 'user already exist';
    } else {
        if ($passwd != $cpasswd) {
            $message[] = 'confirm password not matched!';
            header('location:account.php');
        } else {
            $insert = mysqli_query($conn, "INSERT INTO `contact`(email, passwd) VALUES('$email', '$passwd')") or die('query failed');

            if ($insert) {
                $message[] = 'registered successfully!';
                header('location:home.php');
            } else {
                $message[] = 'registeration failed!';
                header('location:create.php');
            }
        }
    }
}
?>