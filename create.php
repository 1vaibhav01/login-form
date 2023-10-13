<?php
print_r($_POST);

require_once "db.php";
echo isset($_POST['Submit']);


function checkAndSetUName($conn, $uname, $inc)
{
    $originalUname = $uname;
    $inc = (string)$inc;

    while (true) {
        $uname_search = "SELECT * FROM Employee WHERE username=?";
        $unameStmt = $conn->prepare($uname_search);
        $unameStmt->bind_param("s", $uname);
        $unameStmt->execute();

        $result = $unameStmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            $uname = $originalUname . "." . $inc;
            $inc++;
        } else {
            return $uname;
        }
    }
}


if (isset($_POST['Submit'])) {

    $FName = $_POST['fname'];
    $LName = $_POST['lname'];
    $Mobile = $_POST['mobile'];
    $Email = $_POST['email'];
    $Gender = $_POST['gender'];

    $State = $_POST["state"];
    $City = $_POST["city"];

    $Qualifications = $_POST['qualification'];
    $Skills = $_POST['skill'];
    $Frameworks = $_POST['framework'];

    if (
        isset($FName) &&
        isset($LName) &&
        isset($Mobile) &&
        isset($Email) &&
        isset($Gender) &&
        isset($State) &&
        isset($City) &&

        isset($Qualifications) && !empty($Qualifications) &&
        isset($Skills) && !empty($Skills) &&
        isset($Frameworks) && !empty($Frameworks)
    ) {
        $uname = $FName[0] . "." . $LName;

        $username = checkAndSetUName($conn, $uname, 1);
        $username = strtolower($username);
        // echo $username;

        $str = "123456";
        $password = password_hash($str, PASSWORD_BCRYPT, ['cost' => 12]);

        $sql = "INSERT INTO Employee (`username`,`password`,`fname`,`lname`,`mobile`,`email`,`gender`,`state`,`city`)
            VALUES (? ,?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $username, $password, $FName, $LName, $Mobile, $Email, $Gender, $State, $City);

        if ($stmt->execute()) {
            echo "User added successfully\n";
            $currentUserId = $conn->insert_id; // Get the ID of the last inserted row

            foreach ($Qualifications as $qual) {
                $qualification_id_query = "SELECT id FROM Qualifications WHERE name=?";
                $stmt2 = $conn->prepare($qualification_id_query);
                $stmt2->bind_param("s", $qual);
                $stmt2->execute();
                $result2 = $stmt2->get_result();
                $row2 = $result2->fetch_assoc();
                $qualification_id = $row2['id'];

                $sql2 = "INSERT INTO User_qualifications (`user_id`,`qual_id`) VALUES (?, ?)";
                $stmt3 = $conn->prepare($sql2);
                $stmt3->bind_param("ii", $currentUserId, $qualification_id);

                if ($stmt3->execute()) {
                    echo "User qualification added successfully\n";
                }
            }

            foreach ($Skills as $skl) {
                $skillId_query = "SELECT id FROM Skills WHERE name=?";
                $stmt4 = $conn->prepare($skillId_query);
                $stmt4->bind_param("s", $skl);
                $stmt4->execute();
                $result4 = $stmt4->get_result();
                $row4 = $result4->fetch_assoc();
                $skillId = $row4['id'];

                $sql3 = "INSERT INTO User_skills (`user_id`,`skill_id`) VALUES (?, ?)";
                $stmt5 = $conn->prepare($sql3);
                $stmt5->bind_param("ii", $currentUserId, $skillId);

                if ($stmt5->execute()) {
                    echo "User skill added successfully\n";
                }
            }

            foreach ($Frameworks as $frm) {
                $frameworkId_query = "SELECT id FROM Frameworks WHERE name=?";
                $stmt6 = $conn->prepare($frameworkId_query);
                $stmt6->bind_param("s", $frm);
                $stmt6->execute();
                $result6 = $stmt6->get_result();
                $row6 = $result6->fetch_assoc();
                $frameworkId = $row6['id'];

                $sql4 = "INSERT INTO User_frameworks (`user_id`,`framework_id`) VALUES (?, ?)";
                $stmt7 = $conn->prepare($sql4);
                $stmt7->bind_param("ii", $currentUserId, $frameworkId);

                if ($stmt7->execute()) {
                    echo "User framework added successfully\n";
                } else {
                    echo "Error: " . $stmt7->error;
                }
            }

            header("location: login.php");
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error:" . $conn->error;;
    }
}
