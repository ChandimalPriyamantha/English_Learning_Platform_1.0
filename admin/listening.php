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
                <a class="navbar-brand me-auto ms-lg-0 ms-3 fw-bold" href="#"><i class="bi bi-circle me-3"></i>Language Traning Platform</a>
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
            <h4>Listening Tasks</h4>
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Create Listening  Tasks</h5>
                        <p class="card-text">You can crate the listening  tasks using crate task button.</p>
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
                             <p>hello</p>
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