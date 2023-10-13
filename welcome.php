<?php
session_start();
if (!isset($_SESSION['emp_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <!-- Link to Bootstrap 5.0.2-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="table.css" rel="stylesheet">

</head>

<body>
    <!-- <h1>Hello, Welcome!</h1> -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid" style="height:3.5rem;">
            <span class="navbar-brand mb-0 h1">Dashboard</span>
            <a id="logout" href="logout.php" class="btn btn-outline-light me-2" type="button">Logout</a>
        </div>
    </nav>

    <!-- Display data -->
    <section style="margin: 50px 0; margin-top: 5rem;">
        <div class="container">

            <table id="emp-table" class="table table-dark table table-hover table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope=" col">Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">FName</th>
                        <th scope="col">LName</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">Qualification</th>
                        <th scope="col">Skills</th>
                        <th scope="col">Frameworks</th>
                        <th scope="col">Update</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>

            </table>
        </div>
    </section>


    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function($) {

            $('#emp-table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "getData.php",
                "lengthMenu": [3, 5, 10, 25],
                "pageLength": 3,
                "pagingType": "full_numbers",
            });
        });
    </script>
</body>

</html>