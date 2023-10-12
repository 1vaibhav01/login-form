<?php
print_r($_POST);
require_once "db.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);


if (
    isset($_GET['id']) &&
    isset($_POST['newfname']) &&
    isset($_POST['newlname']) &&
    isset($_POST['newmobile']) &&
    isset($_POST['newemail']) &&
    isset($_POST['newgender']) &&
    isset($_POST['newstate']) &&
    isset($_POST['newcity']) &&
    isset($_POST['newqualification']) &&
    isset($_POST['newskill']) &&
    isset($_POST['newframework'])
) {

    $id = $_GET['id'];
    $newfname = $_POST['newfname'];
    $newlname = $_POST['newlname'];
    $newmobile = $_POST['newmobile'];
    $newemail = $_POST['newemail'];
    $newgender = $_POST['newgender'];
    $newstate = $_POST['newstate'];
    $newcity = $_POST['newcity'];

    $newqualification = $_POST['newqualification'];
    $newskill = $_POST['newskill'];
    $newframework = $_POST['newframework'];

    $updateSql = "UPDATE Employee SET 
        `fname` = ?,
        `lname` = ?,
        `mobile` = ?,
        `email` = ?,
        `gender` = ?,
        `state` = ?,
        `city` = ?
        WHERE id = ?";

    $updateStmt = $conn->prepare($updateSql);

    if (!$updateStmt) {
        echo "Update statement not prepared: " . $conn->error;
    } else {
        $updateStmt->bind_param("sssssssi", $newfname, $newlname, $newmobile, $newemail, $newgender, $newstate, $newcity, $id);

        if ($updateStmt->execute()) {

            $clearQualifications = "DELETE FROM User_qualifications WHERE user_id = ?";
            $clearQualificationsStmt = $conn->prepare($clearQualifications);
            $clearQualificationsStmt->bind_param("i", $id);

            if ($clearQualificationsStmt->execute()) {
                $clearQualificationsStmt->close();
            } else {
                echo "Error clearing qualifications: " . $clearQualificationsStmt->error;
                $clearQualificationsStmt->close();
            }

            $clearSkills = "DELETE FROM User_skills WHERE user_id = ?";
            $clearSkillsStmt = $conn->prepare($clearSkills);
            $clearSkillsStmt->bind_param("i", $id);

            if ($clearSkillsStmt->execute()) {
                $clearSkillsStmt->close();
            } else {
                echo "Error clearing skills: " . $clearSkillsStmt->error;
                $clearSkillsStmt->close();
            }

            $clearFrameworks = "DELETE FROM User_frameworks WHERE user_id = ?";
            $clearFrameworksStmt = $conn->prepare($clearFrameworks);
            $clearFrameworksStmt->bind_param("i", $id);

            if ($clearFrameworksStmt->execute()) {
                $clearFrameworksStmt->close();
            } else {
                echo "Error clearing frameworks: " . $clearFrameworksStmt->error;
                $clearFrameworksStmt->close();
            }

            foreach ($newqualification as $qual) {
                $qualification_id_query = "SELECT id FROM Qualifications WHERE name=?";
                $stmt1 = $conn->prepare($qualification_id_query);
                $stmt1->bind_param("s", $qual);
                $stmt1->execute();
                $result1 = $stmt1->get_result();
                $row1 = $result1->fetch_assoc();
                $qualification_id = $row1['id'];

                $qualSql = "INSERT INTO User_qualifications (`user_id`, `qual_id`) VALUES (?, ?)";
                $qualStmt = $conn->prepare($qualSql);
                $qualStmt->bind_param("ii", $id, $qualification_id);
                $qualStmt->execute();
            }


            foreach ($newskill as $skill) {
                $skillId_query = "SELECT id FROM Skills WHERE name=?";
                $stmt2 = $conn->prepare($skillId_query);
                $stmt2->bind_param("s", $skill);
                $stmt2->execute();
                $result2 = $stmt2->get_result();
                $row2 = $result2->fetch_assoc();
                $skillId = $row2['id'];

                $skillSql = "INSERT INTO User_skills (`user_id`, `skill_id`) VALUES (?, ?)";
                $skillStmt = $conn->prepare($skillSql);
                $skillStmt->bind_param("ii", $id, $skillId);
                $skillStmt->execute();
            }


            foreach ($newframework as $framework) {
                $frameworkId_query = "SELECT id FROM Frameworks WHERE name=?";
                $stmt3 = $conn->prepare($frameworkId_query);
                $stmt3->bind_param("s", $framework);
                $stmt3->execute();
                $result3 = $stmt3->get_result();
                $row3 = $result3->fetch_assoc();
                $frameworkId = $row3['id'];
                echo $frameworkId;

                $frameworkSql = "INSERT INTO User_frameworks (`user_id`, `framework_id`) VALUES (?, ?)";
                $frameworkStmt = $conn->prepare($frameworkSql);
                $frameworkStmt->bind_param("ii", $id, $frameworkId);
                $frameworkStmt->execute();
            }

            header("location: welcome.php");
        } else {
            echo "Error executing update statement: " . $updateStmt->error;
        }
    }

    $updateStmt->close();
}
