<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>

    <section>
        <div>
            <div class="card" style="width: 30rem; margin: 0 auto; margin-top: 10rem; border-radius: 0.4rem">

                <div class="card-body" style="display: flex; flex-wrap: wrap; flex-direction: column; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 0.4rem">

                    <h5 class="card-title" style="text-align: center; margin-top: 1rem; ">LOGIN</h5>

                    <form id="login-form" action="auth.php" style="margin: 0 1rem;" method="post">

                        <div style="margin-top: 2rem;" class="form-group">
                            <label for="usernameEmail">Username/Email</label>
                            <input type="text" class="form-control" name="usernameEmail" id="usernameEmail" aria-describedby="emailHelp" placeholder="Enter email or username">
                            <p style="margin-top: 0.5rem; margin-bottom: 0;" class="error"></p>

                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div style="margin-top: 1rem;" class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">

                            <small id="registerLink" class="form-text text-muted">
                                <a href="register.php" style="text-decoration: none;">
                                    New User ? Click Here!
                                </a>
                            </small>
                        </div>

                        <div class="text-center">
                            <button name="login-button" type="submit" class="btn btn-primary mt-4 mb-3">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="./validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>