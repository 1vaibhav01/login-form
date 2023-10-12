<?php
require_once "db.php";

$id = $_GET["id"];

$clearqual = "DELETE FROM User_qualifications WHERE user_id = ?";
$qualstmt = $conn->prepare($clearqual);
$qualstmt->bind_param("i", $id);

if ($qualstmt->execute()) {
    $qualstmt->close();
} else {
    echo "Error clearing qualifications: " . $qualstmt->error;
    $qualstmt->close();
}

$clearskill = "DELETE FROM User_skills WHERE user_id = ?";
$skillStmt = $conn->prepare($clearskill);
$skillStmt->bind_param("i", $id);

if ($skillStmt->execute()) {
    $skillStmt->close();
} else {
    echo "Error clearing skills: " . $skillStmt->error;
    $skillStmt->close();
}

$clearframework = "DELETE FROM User_frameworks WHERE user_id = ?";
$frameworkStmt = $conn->prepare($clearframework);
$frameworkStmt->bind_param("i", $id);

if ($frameworkStmt->execute()) {
    $frameworkStmt->close();
} else {
    echo "Error clearing frameworks: " . $frameworkStmt->error;
    $frameworkStmt->close();
}

$sql = "DELETE FROM Employee WHERE id=?";
$delstmt = $conn->prepare($sql);

if (!$delstmt) {
    echo "Delete query not prepared! :" . $sql . "<br>" . $conn->error;
} else {
    $delstmt->bind_param("i", $id);

    if ($delstmt->execute()) {
        $delstmt->close();
    } else {
        echo "Error deleting employee: " . $delstmt->error;
        $delstmt->close();
    }

    header("location: welcome.php");
}
