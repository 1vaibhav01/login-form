<?php
require_once('db.php');

$query = $conn->query("SELECT COUNT(id) FROM Employee");
$totalRecords = $query->fetch_row()[0];

$length = $_GET['length'];
$start = $_GET['start'];

$sql = "WITH qual AS (
    SELECT qu.user_id, GROUP_CONCAT(q.name SEPARATOR ', ') AS qualifications
    FROM Qualifications q
    JOIN User_qualifications qu ON q.id = qu.qual_id
    GROUP BY qu.user_id
    ),
    frm AS (
        SELECT fu.user_id, GROUP_CONCAT(f.name SEPARATOR ', ') AS frameworks
        FROM Frameworks f
        JOIN User_frameworks fu ON f.id = fu.framework_id
        GROUP BY fu.user_id
    ),
    skl AS (
        SELECT su.user_id, GROUP_CONCAT(s.name SEPARATOR ', ') AS skills
        FROM Skills s
        JOIN User_skills su ON s.id = su.skill_id
        GROUP BY su.user_id
        ),
    main AS (SELECT e.id, e.username, e.fname, e.lname,e.mobile, e.email, e.gender, e.state, e.city, q.qualifications,s.skills, f.frameworks
        FROM Employee e
        LEFT JOIN qual q ON e.id = q.user_id
        LEFT JOIN frm f ON e.id = f.user_id
        LEFT JOIN skl s ON e.id = s.user_id
        ORDER BY e.id)

        SELECT * FROM main    
    ";


if (isset($_GET['search']) && !empty($_GET['search']['value'])) {
    $search = $_GET['search']['value'];
    $sql .= sprintf(" WHERE fname LIKE '%s' OR email LIKE '%s'", '%' . $conn->real_escape_string($search) . '%', '%' . $conn->real_escape_string($search) . '%');
}

$sql .= " LIMIT $start, $length";
$query = $conn->query($sql);

if (!$query) {
    echo json_encode(['error' => $conn->error]);
    exit;
}


$result = [];
while ($row = $query->fetch_assoc()) {
    $result[] = [
        $row['id'],
        $row['username'],
        $row['fname'],
        $row['lname'],
        $row['mobile'],
        $row['email'],
        $row['gender'],
        $row['city'],
        $row['state'],
        $row['qualifications'],
        $row['skills'],
        $row['frameworks'],
        "<td><a class='btn btn-primary' href=edit.php?id=" . $row['id'] . ">Edit</a></td>",
        "<td><a class='btn btn-danger' href=delete.php?id=" . $row['id'] . ">Delete</a></td>",
    ];
}

echo json_encode([
    'draw' => $_GET['draw'],
    'recordsTotal' => $totalRecords,
    'recordsFiltered' => $totalRecords,
    'data' => $result,
]);
