<?php
var_dump($_POST);
require_once "db.php";
// session_start();

if (isset($_POST['login-button'])) {
    $usernameEmail = $_POST['usernameEmail'];
    $pwd = $_POST['password'];

    if (isset($usernameEmail) && isset($pwd)) {

        $sql = (filter_var($usernameEmail, FILTER_VALIDATE_EMAIL)) ? "SELECT * FROM Employee WHERE email=?" : "SELECT * FROM Employee WHERE username=?";

        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $usernameEmail);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            if ($row) {
                if ($pwd == "123456") {
                    echo "Login successful!";
                    header("location: welcome.php");
                    exit();
                } else {
                    echo "Invalid password";
                }
            } else {
                echo "User not found";
            }

            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
