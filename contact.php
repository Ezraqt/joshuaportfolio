<?php
include('conn.php');
if (isset($_POST["create"])) {
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);
    $sqlInsert = "INSERT INTO portfolio_db(fname , email , subject , message) VALUES ('$fname','$email','$subject', '$message')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Message has been added Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
?>