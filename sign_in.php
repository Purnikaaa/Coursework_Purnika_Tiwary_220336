<?php
include 'config.php';
session_start();

if (isset($_POST['submit'])) {

   $uname = mysqli_real_escape_string($conn, $_POST['uname']);
   $passwd = mysqli_real_escape_string($conn, md5($_POST['passwd']));
   // $passwd = mysqli_real_escape_string($conn, $_POST['passwd']);

   $select = mysqli_query($conn, "SELECT * FROM `purnika` WHERE uname = '$uname' AND passwd = '$passwd'") or die('query failed');

   if (mysqli_num_rows($select) > 0) {
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];

      // Fetch the username associated with the user_id
      $user_id = $_SESSION['user_id'];
      $user_query = mysqli_query($conn, "SELECT uname FROM `purnika` WHERE id = '$user_id'");
      $user_data = mysqli_fetch_assoc($user_query);
      $_SESSION['username'] = $user_data['uname'];

      header('location: admin.php');
   } else {
      $_SESSION['message'] = 'Incorrect username or password!';
      header('location: login.php');
   }
}
?>