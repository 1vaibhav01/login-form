<?php
require_once "db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM Employee WHERE id = ?";

    $empStmt = $conn->prepare($sql);

    if (!$empStmt) {
        echo "Employee doesn't exist: " . $conn->error;
    } else {
        $res = array();
        $empStmt->bind_param("i", $id);
        $empStmt->execute();
        $result = $empStmt->get_result()->fetch_assoc();
        $empStmt->close();
        array_push($res, $result);

        $qual_query = "SELECT qual_id FROM User_qualifications WHERE user_id = ?";
        $qualStmt = $conn->prepare($qual_query);
        $qualStmt->bind_param("i", $id);
        $qualStmt->execute();
        $qualResult = $qualStmt->get_result();

        $qualifications = array();
        while ($row = $qualResult->fetch_assoc()) {
            $qual_id = $row['qual_id'];
            $qual_name_query = "SELECT name FROM Qualifications WHERE id = ?";
            $qualNameStmt = $conn->prepare($qual_name_query);
            $qualNameStmt->bind_param("i", $qual_id);
            $qualNameStmt->execute();
            $qualNameResult = $qualNameStmt->get_result();
            while ($rowName = $qualNameResult->fetch_assoc()) {
                $qualifications[] = $rowName['name'];
            }
            $qualNameStmt->close();
        }
        $qualStmt->close();

        array_push($res, $qualifications);

        $skill_query = "SELECT skill_id FROM User_skills WHERE user_id = ?";
        $skillStmt = $conn->prepare($skill_query);
        $skillStmt->bind_param("i", $id);
        $skillStmt->execute();
        $skillResult = $skillStmt->get_result();

        $skills = array();
        while ($row = $skillResult->fetch_assoc()) {
            $skill_id = $row['skill_id'];
            $skill_name_query = "SELECT name FROM Skills WHERE id = ?";
            $skillNameStmt = $conn->prepare($skill_name_query);
            $skillNameStmt->bind_param("i", $skill_id);
            $skillNameStmt->execute();
            $skillNameResult = $skillNameStmt->get_result();
            $skillNameRow = $skillNameResult->fetch_assoc();
            $skillNameStmt->close();
            $skills[] = $skillNameRow['name'];
        }
        $skillStmt->close();
        array_push($res, $skills);


        $framework_query = "SELECT framework_id FROM User_frameworks WHERE user_id = ?";
        $frameworkStmt = $conn->prepare($framework_query);
        $frameworkStmt->bind_param("i", $id);
        $frameworkStmt->execute();
        $frameworkResult = $frameworkStmt->get_result();

        $frameworks = array();
        while ($row = $frameworkResult->fetch_assoc()) {
            $framework_id = $row['framework_id'];
            $framework_name_query = "SELECT name FROM Frameworks WHERE id = ?";
            $frameworkNameStmt = $conn->prepare($framework_name_query);
            $frameworkNameStmt->bind_param("i", $framework_id);
            $frameworkNameStmt->execute();
            $frameworkNameResult = $frameworkNameStmt->get_result();
            $frameworkNameRow = $frameworkNameResult->fetch_assoc();
            $frameworkNameStmt->close();
            $frameworks[] = $frameworkNameRow['name'];
        }
        $frameworkStmt->close();
        array_push($res, $frameworks);

        echo json_encode($res);
    }
} else {
    echo json_encode(array('error' => 'Invalid request'));
}
