<!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Costom css -->
    <link rel="stylesheet" href="asset/style-index.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>


        <div class="login">
            <h1 class="text-center">Login</h1>
            <form class="needs-validation">
                <div class="form-group was-validated">
                    <label class="form-group" for="email">Email address</label>
                    <input class="form-control" type="email" id="email" name="email" >
                    <div class="invalid-feedback">
                        Please enter your email address

                    </div>
                </div>
                <div class="form-group">

                    <label class="form-group" for="password">Password</label>
                    <input class="form-control" type="password" id="password" name="password" >
                    <div class="invalid-feedback">
                        Please enter your password

                    </div>
                </div>
               
                <div class="form-group was-validated">
                    <label class="form-group" for="email">Teacher ID</label>
                    <input class="form-control" type="email" id="email" name="email">
                    <div class="invalid-feedback">
                        Please enter your email address

                    </div>
                </div>
                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" id="check" name="check">
                    <label class="form-check-label" for="check">Remember me</label>



                </div>
                <div class="mt-2 text-center">
                    Don't have an account? <a href="register.php">Create One</a>
                </div>

                <div>
                    <input class="btn btn-success w-100" type="submit" value="Login">
                </div>

            </form>
        </div>


    </main>
    <footer>
        <!-- place footer here -->

    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>