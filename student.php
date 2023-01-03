<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="admin/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="admin/css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="admin/css/style.css" />
        <title>Frontendfunn - Bootstrap 5 Admin Dashboard Template</title>

        <!-- include summernote css/js-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    </head>

    <body>
        <!-- top navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
                </button>
                <a class="navbar-brand me-auto ms-lg-0 ms-3  fw-bold" href="#"><i class="bi bi-circle me-3"></i>Language Traning Platform</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="topNavBar">
                    <form class="d-flex ms-auto my-3 my-lg-0">
                        <div class="input-group">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                            <button class="btn btn-success" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                                Hi, <?php echo $_SESSION['name'] ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Aboute</a></li>
                                <li>
                                    <a class="dropdown-item" href="check-php/student-logout.php">Log out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- top navigation bar -->
        <div class="mt-5 pt-3">


            <div class="container-fluid">

                <div class="card text-center">
                    <div class="card-header bg-success ">
                        <ul class="nav nav-tabs card-header-tabs text-black">
                            <li class="nav-item">
                                <a class="nav-link active bg-light" aria-current="true" href="#">Writting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Reading</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Spoken</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Listening</a>
                            </li>
                            <li class=" d-flex ms-auto my-3 my-lg-0">
                                <a class="nav-link text-white fw-bold" href="#"><i class="bi bi-envelope me-2"></i>
                                    <?php
                                    include 'check-php/connection.php';
                                    $username = $_SESSION['TID'];
                                    $sql = "SELECT Name FROM user_details WHERE Email='$username'";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    mysqli_close($conn);


                                    echo $row['Name']  ?>'s class room</a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body bg-light">
                        <h5 class="card-title">Writting Task Panale</h5>
                        <p class="card-text">You can practice writting using this platform.</p>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="get">
                                            <textarea name="content" id="summernote"></textarea>

                                            <script>
                                                $('#summernote').summernote({
                                                    placeholder: 'Write your answer here.',
                                                    tabsize: 2,
                                                    height: 300,
                                                    toolbar: [
                                                        ['style', ['style']],
                                                        ['font', ['bold', 'underline', 'clear']],
                                                        ['color', ['color']],
                                                        ['para', ['ul', 'ol', 'paragraph']],
                                                        ['table', ['table']],
                                                        ['insert', ['link', 'picture', 'video']],

                                                    ]
                                                });
                                            </script>
                                    </div>
                                    <input type="submit" value="Clike to subbmit your answer" class="btn btn-success start-0">

                                </div>
                                </form>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Tasks Display Dashbord</h5>

                                    </div>
                                    <div class="card-body">



                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped data-table" style="width: 100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Task Details</th>
                                                        <th scope="col">Due Date & Time</th>
                                                        <th scope="col">State</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include 'check-php/connection.php';
                                                    $email_id =  $_SESSION['TID'];
                                                    $_SESSION['SUBMIT'] = "Not Sumited";
                                                    $submition = $_SESSION['SUBMIT'];
                                                    $sql = "SELECT * FROM wrtting_task where Email_ID='$email_id' and State='Active'";
                                                    $result = mysqli_query($conn, $sql);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                            $id = $row["ID"];
                                                            $Task_Details = $row["Task_Details"];
                                                            $Created_date_time = $row["Created_date_time"];
                                                            $due_date = $row["Due_date"];
                                                            $due_time = $row['Due_time'];
                                                            $state = $row['State'];


                                                    ?>
                                                            <tr>
                                                                <td><?php echo $id ?> </td>
                                                                <td><?php echo $Task_Details ?></td>


                                                                <td class="py-2 px-3 me-2 border border-warning rounded-3 d-flex align-items-center bg-warning text-danjer"><?php echo $due_date . ' ' . $due_time ?></td>

                                                                <td class="text-success"><?php echo  $submition  ?></td>


                                                        <?php }
                                                    } else {
                                                        echo "<tr>";
                                                        echo "0 results";
                                                        echo "</tr>";
                                                    }
                                                    mysqli_close($conn);

                                                        ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>


        <script src="admin/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
        <script src="admin/js/jquery-3.5.1.js"></script>
        <script src="admin/js/jquery.dataTables.min.js"></script>
        <script src="admin/js/dataTables.bootstrap5.min.js"></script>
        <script src="admin/js/script.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location: student-loging.php");
    exit();
}
?>