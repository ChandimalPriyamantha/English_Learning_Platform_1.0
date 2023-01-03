<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_type'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Frontendfunn - Bootstrap 5 Admin Dashboard Template</title>
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
                                    <a class="dropdown-item" href="../check-php/logout.php">Log out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- top navigation bar -->
        <!-- offcanvas -->
        <div class="offcanvas offcanvas-start sidebar-nav bg-success" tabindex="-1" id="sidebar">
            <div class="offcanvas-body p-0">
                <nav class="navbar-dark">
                    <ul class="navbar-nav">
                        <li>
                            <div class="text-white small fw-bold text-uppercase px-3">
                                CORE
                            </div>
                        </li>
                        <li>
                            <a href="admin.php" class="nav-link px-3 active">
                                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="my-4">
                            <hr class="dropdown-divider bg-light" />
                        </li>
                        <li>
                            <div class="text-white small fw-bold text-uppercase px-3 mb-3">
                                Interface
                            </div>
                        </li>
                        <li>
                            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                                <span>Tasks</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="layouts">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="writting.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-pen"></i></span>
                                            <span>Writting</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="listening.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-file-earmark-music"></i></span>
                                            <span>Listening</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="reading.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-bookmark-dash"></i></span>
                                            <span>Reading</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="spoken.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-megaphone"></i></i></span>
                                            <span>Spoken</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="add-student.php" class="nav-link px-3">
                                <span class="me-2"><i class="bi bi-person-plus"></i></span>
                                <span>Add Students</span>
                            </a>
                        </li>
                        <li class="my-4">
                            <hr class="dropdown-divider bg-light" />
                        </li>
                        <li>
                            <div class="text-white small fw-bold text-uppercase px-3 mb-3">
                                Addons
                            </div>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                                <span>Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"><i class="bi bi-table"></i></span>
                                <span>Tables</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- offcanvas -->
        <main class="mt-5 pt-3">
            <div class="container-fluid">
                <h4>Writting Tasks</h4>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger">
                        <p><?php echo $_GET['error'] ?></p>
                    </div>
                <?php } ?>
                <?php if (isset($_GET['success'])) { ?>
                    <div class="alert alert-success">
                        <p><?php echo $_GET['success'] ?></p>
                    </div>
                <?php } ?>



                <div class="card">
                    <div class="card-header bg-success text-white">

                        Featured

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Create Writting Tasks</h5>
                        <p class="card-text">You can crate the writting tasks using crate task button.</p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#layou">
                            <span class="me-2"><i class="bi bi-pen"></i></i></span>
                            <span>Create Tasks</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="layou">

                            <section class="vh-100">
                                <div class="container py-5 h-100">
                                    <div class="row d-flex justify-content-center align-items-center h-100">
                                        <div class="col">
                                            <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
                                                <div class="card-body py-4 px-4 px-md-5">

                                                    <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                                                        <i class="fas fa-check-square me-1"></i>
                                                        <u>My Writting Tasks</u>
                                                    </p>

                                                    <form method="post" action="core-php/core_writting.php">
                                                        <div class="pb-2">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="d-flex flex-row align-items-center">

                                                                        <input type="text" class="form-control form-control-lg me-2" id="exampleFormControlInput1" placeholder="Add new..." name="writting_task">

                                                                        <input type="date" class="form-control form-control-lg me-2" id="exampleFormControlInput1" name="date">

                                                                        <input type="time" class="form-control form-control-lg me-2" id="exampleFormControlInput1" name="time">

                                                                        <div>
                                                                            <input type="submit" value="Add" class="btn btn-success">

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <hr class="my-4">

                                                    <div class="d-flex justify-content-end align-items-center mb-4 pt-2 pb-3">
                                                        <p class="small mb-0 me-2 text-muted">Filter</p>
                                                        <select class="select">
                                                            <option value="1">All</option>
                                                            <option value="2">Completed</option>
                                                            <option value="3">Active</option>
                                                            <option value="4">Has due date</option>
                                                        </select>
                                                        <p class="small mb-0 ms-4 me-2 text-muted">Sort</p>
                                                        <select class="select">
                                                            <option value="1">Added date</option>
                                                            <option value="2">Due date</option>
                                                        </select>
                                                        <a href="#!" style="color: #23af89;" data-mdb-toggle="tooltip" title="Ascending"><i class="fas fa-sort-amount-down-alt ms-2"></i></a>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table id="example" class="table table-striped data-table" style="width: 100%">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">ID</th>
                                                                    <th scope="col">Task Details</th>
                                                                    <th scope="col">Created Date & Time</th>
                                                                    <th scope="col">Due Date & Time</th>
                                                                    <th scope="col">State</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                include '../check-php/connection.php';
                                                                $email_id = $_SESSION['email_id'];
                                                                $sql = "SELECT * FROM wrtting_task where Email_ID='$email_id'";
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
                                                                            <td><?php echo $Created_date_time ?></td>

                                                                            <td class="py-2 px-3 me-2 border border-warning rounded-3 d-flex align-items-center bg-warning text-white"><?php echo $due_date . ' ' . $due_time ?></td>
                                                                            <?php if ($state == 'Active') { ?>
                                                                                <td class="text-success"><?php echo $state  ?></td>
                                                                            <?php } else { ?>
                                                                                <td class="text-danger"><?php echo $state  ?></td>
                                                                            <?php } ?>
                                                                            <td>

                                                                                <a href="#!" class="text-info" data-mdb-toggle="tooltip" title="Edit Task"><i class="bi bi-pencil"></i></a>
                                                                                <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete Task"><i class="bi bi-trash2"></i></a>
                                                                                <?php if ($state == 'Active') { ?>
                                                                                    <a href="#!" class="text-success" data-mdb-toggle="tooltip" title="Deactive"><i class="bi bi-disc"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Active"><i class="bi bi-disc"></i></a>
                                                                                <?php } ?>
                                                                            </td>


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


                                                    <!--<ul class="list-group list-group-horizontal rounded-0 bg-transparent">
                                                        <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                                                            <div class="form-check">
                                                                <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked1" aria-label="..." checked />
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                                                            <p class="lead fw-normal mb-0">Buy groceries for next week</p>
                                                        </li>
                                                        <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                                                            <div class="d-flex flex-row justify-content-end mb-1">
                                                                <a href="#!" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i class="fas fa-pencil-alt me-3"></i></a>
                                                                <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i class="fas fa-trash-alt"></i></a>
                                                            </div>
                                                            <div class="text-end text-muted">
                                                                <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                                                                    <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>28th Jun 2020</p>
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group list-group-horizontal rounded-0">
                                                        <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                                                            <div class="form-check">
                                                                <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked2" aria-label="..." />
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                                                            <p class="lead fw-normal mb-0">Renew car insurance</p>
                                                        </li>
                                                        <li class="list-group-item px-3 py-1 d-flex align-items-center border-0 bg-transparent">
                                                            <div class="py-2 px-3 me-2 border border-warning rounded-3 d-flex align-items-center bg-light">
                                                                <p class="small mb-0">
                                                                    <a href="#!" data-mdb-toggle="tooltip" title="Due on date">
                                                                        <i class="fas fa-hourglass-half me-2 text-warning"></i>
                                                                    </a>
                                                                    28th Jun 2020
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                                                            <div class="d-flex flex-row justify-content-end mb-1">
                                                                <a href="#!" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i class="fas fa-pencil-alt me-3"></i></a>
                                                                <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i class="fas fa-trash-alt"></i></a>
                                                            </div>
                                                            <div class="text-end text-muted">
                                                                <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                                                                    <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>28th Jun 2020</p>
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group list-group-horizontal rounded-0 mb-2">
                                                        <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                                                            <div class="form-check">
                                                                <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked3" aria-label="..." />
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                                                            <p class="lead fw-normal mb-0 bg-light w-100 ms-n2 ps-2 py-1 rounded">Sign up for online
                                                                course</p>
                                                        </li>
                                                        <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                                                            <div class="d-flex flex-row justify-content-end mb-1">
                                                                <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i class="fas fa-trash-alt"></i></a>
                                                            </div>
                                                            <div class="text-end text-muted">
                                                                <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                                                                    <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>28th Jun 2020</p>
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </ul> -->

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </section>

                        </div>

                    </div>
                </div>
            </div>
        </main>

        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
        <script src="./js/jquery-3.5.1.js"></script>
        <script src="./js/jquery.dataTables.min.js"></script>
        <script src="./js/dataTables.bootstrap5.min.js"></script>
        <script src="./js/script.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>